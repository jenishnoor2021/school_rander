<?php

namespace App\Http\Controllers;

use App\Models\Achivement;
use App\Models\Activity;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
  private $types = [
    'achievement' => ['label' => 'Achievements', 'model' => Achivement::class, 'store' => 'admin.achivement.store', 'edit' => 'admin.achivement.edit', 'destroy' => 'admin.achivement.destroy', 'folder' => 'achivement', 'deleteAll' => 'deleteachivementAll'],
    'activity' => ['label' => 'Activities', 'model' => Activity::class, 'store' => 'admin.activity.store', 'edit' => 'admin.activitycategory.edit', 'destroy' => 'admin.activitycategory.destroy', 'folder' => 'activity', 'deleteAll' => 'deleteactivitycategoryAll'],
    'event' => ['label' => 'Events', 'model' => Event::class, 'store' => 'admin.event.store', 'edit' => 'admin.event.edit', 'destroy' => 'admin.event.destroy', 'folder' => 'event', 'deleteAll' => 'deleteeventAll'],
  ];

  public function index(Request $request, $type)
  {
    abort_unless(isset($this->types[$type]), 404);
    $config = $this->types[$type];
    $categories = Category::where('type', $type)->orderBy('name')->get();
    $selected = $categories->firstWhere('id', (int) $request->query('category')) ?: $categories->first();
    $items = $selected ? $config['model']::where('category_id', $selected->id)->latest()->paginate(10) : collect();

    return view('admin.categories.index', compact('type', 'config', 'categories', 'selected', 'items'));
  }

  public function store(Request $request, $type)
  {
    abort_unless(isset($this->types[$type]), 404);
    $data = $request->validate(['name' => 'required|string|max:255']);
    Category::create(['type' => $type, 'name' => $data['name'], 'slug' => Str::slug($data['name'])]);
    return redirect()->route('admin.categories.index', $type)->with('success', 'Category added.');
  }

  public function update(Request $request, $type, Category $category)
  {
    abort_unless($category->type === $type, 404);
    $data = $request->validate(['name' => 'required|string|max:255']);
    $category->name = $data['name'];
    $category->save();
    return redirect()->route('admin.categories.index', ['type' => $type, 'category' => $category->id])->with('success', 'Category updated.');
  }

  public function destroy($type, Category $category)
  {
    abort_unless($category->type === $type, 404);
    if ($category->achivements()->exists() || $category->activities()->exists() || $category->events()->exists()) {
      return redirect()->route('admin.categories.index', $type)->with('error', 'Move or delete the items in this category before deleting it.');
    }
    $category->delete();
    return redirect()->route('admin.categories.index', $type)->with('success', 'Category deleted.');
  }
}
