<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateCategoriesTable extends Migration
{
  public function up()
  {
    Schema::create('categories', function (Blueprint $table) {
      $table->id();
      $table->string('type');
      $table->string('name');
      $table->string('slug');
      $table->timestamps();
      $table->unique(['type', 'slug']);
    });

    $defaults = [
      'achievement' => ['Student', 'Principal'],
      'activity' => ['Celebration', 'Competition', 'Club'],
      'event' => ['Annual Day', 'Competition', 'Sports Day', 'Parent Day', 'Grandparent Day', 'Parenting Day', 'Health Day', 'Convocation Day'],
    ];

    foreach ($defaults as $type => $names) {
      foreach ($names as $name) {
        DB::table('categories')->insert([
          'type' => $type,
          'name' => $name,
          'slug' => Str::slug($name),
          'created_at' => now(),
          'updated_at' => now(),
        ]);
      }
    }
  }

  public function down()
  {
    Schema::dropIfExists('categories');
  }
}
