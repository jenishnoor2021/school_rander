<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdsToContentTables extends Migration
{
  public function up()
  {
    foreach (['achivements', 'activities', 'events'] as $tableName) {
      Schema::table($tableName, function (Blueprint $table) {
        $table->foreignId('category_id')->nullable()->after('id')->constrained('categories')->nullOnDelete();
      });
    }

    $aliases = [
      'achivements' => ['type' => 'achievement', 'values' => []],
      'activities' => ['type' => 'activity', 'values' => []],
      'events' => ['type' => 'event', 'values' => ['annual' => 'annual-day', 'sport' => 'sports-day', 'parent' => 'parent-day', 'grand_parent' => 'grandparent-day', 'parenting' => 'parenting-day', 'health' => 'health-day']],
    ];

    foreach ($aliases as $tableName => $config) {
      $type = $config['type'];
      DB::table($tableName)->orderBy('id')->each(function ($item) use ($tableName, $type, $config) {
        $slug = $config['values'][$item->category] ?? $item->category;
        $category = DB::table('categories')
          ->where('type', $type)
          ->where(function ($query) use ($item, $slug) {
            $query->where('slug', $slug)
              ->orWhereRaw('LOWER(name) = ?', [strtolower((string) $slug)]);
          })
          ->first();

        if ($category) {
          DB::table($tableName)->where('id', $item->id)->update(['category_id' => $category->id]);
        }
      });
    }
  }

  public function down()
  {
    foreach (['achivements', 'activities', 'events'] as $tableName) {
      Schema::table($tableName, function (Blueprint $table) {
        $table->dropForeign(['category_id']);
        $table->dropColumn('category_id');
      });
    }
  }
}
