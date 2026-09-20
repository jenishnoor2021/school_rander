<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquireysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquireys', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname')->nullable();;
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('dob')->nullable();
            $table->string('subject')->nullable();
            $table->string('media')->nullable();
            $table->text('detail')->nullable();
            $table->string('bus_facility', 50)->nullable();
            $table->string('cast')->nullable();
            $table->string('source')->nullable();
            $table->string('taken_by')->nullable();
            $table->boolean('is_show')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enquireys');
    }
}
