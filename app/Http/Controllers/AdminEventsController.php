<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminEventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $events = Event::orderBy('id', 'DESC')->Paginate(10);
        $categories = Category::where('type', 'event')->orderBy('name')->get();
        $selectedCategory = (int) $request->query('category');
        return view('admin.event.index', compact('events', 'categories', 'selectedCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('admin.categories.index', 'event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['category_id' => 'required|exists:categories,id', 'text' => 'required|string|max:255', 'file' => 'required|image']);
        $category = Category::where('type', 'event')->findOrFail($request->category_id);
        $namef = null;
        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $namef = time() . $str;

            $file->move('event', $namef);
        }

        $product = new Event([
            "category_id" => $category->id,
            "category" => $category->slug,
            "text" => $request->text,
            "file" => $namef,
            "is_show" => 1,
        ]);
        $product->save();

        return redirect()->route('admin.categories.index', ['type' => 'event', 'category' => $category->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $categories = Category::where('type', 'event')->orderBy('name')->get();
        $backUrl = $this->backUrl($request->query('return_url'), $event->category_id);
        return view('admin.event.edit', compact('event', 'categories', 'backUrl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $push = Event::findOrFail($id);
        $request->validate(['category_id' => 'required|exists:categories,id', 'text' => 'required|string|max:255']);
        $category = Category::where('type', 'event')->findOrFail($request->category_id);

        $input = $request->except(['_token', '_method', 'file', 'return_url']);
        $input['category_id'] = $category->id;
        $input['category'] = $category->slug;

        if ($file = $request->file('file')) {

            $str = $file->getClientOriginalName();
            $str = str_replace(' ', '_', $str);

            $name = time() . $str;

            $file->move('event', $name);

            $input['file'] = "$name";

            if (file_exists(public_path() . $push->file)) // make sure it exits inside the folder
            {
                unlink(public_path() . $push->file);
            }
        }
        $push->update($input);

        return redirect()->to($this->backUrl($request->input('return_url'), $category->id));
    }

    private function backUrl($url, $categoryId)
    {
        $path = $url ? parse_url($url, PHP_URL_PATH) : null;
        if ($url && parse_url($url, PHP_URL_HOST) === request()->getHost() && is_string($path) && strpos($path, '/admin/') === 0) {
            return $url;
        }

        return route('admin.categories.index', ['type' => 'event', 'category' => $categoryId]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        if ($event->file == '/event/') {
        } else {

            if (file_exists(public_path() . $event->file)) // make sure it exits inside the folder
            {
                unlink(public_path() . $event->file);
            }
        }
        $event->delete();

        return Redirect::back();
    }

    public function deleteEventAll(Request $request)
    {
        $ids = $request->ids;
        if (is_string($ids)) {
            $ids = array_filter(explode(',', $ids), 'strlen');
        }
        if (empty($ids) || !is_array($ids)) {
            return response()->json(['error' => 'Please select at least one record to delete.'], 422);
        }

        try {
            \Illuminate\Support\Facades\DB::beginTransaction();
            $deletedCount = 0;
            foreach ($ids as $id) {
                $i = Event::find($id);
                if ($i) {
                    if (!empty($i->file) && $i->file !== '/event/' && file_exists(public_path($i->file))) {
                        @unlink(public_path($i->file));
                    }
                    $i->delete();
                    $deletedCount++;
                }
            }
            \Illuminate\Support\Facades\DB::commit();

            if ($deletedCount === 0) {
                return response()->json(['error' => 'No matching records found to delete.'], 404);
            }

            return response()->json(['success' => 'Selected records have been deleted successfully.']);
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\DB::rollBack();
            return response()->json(['error' => 'An error occurred while deleting: ' . $e->getMessage()], 500);
        }
    }
}
