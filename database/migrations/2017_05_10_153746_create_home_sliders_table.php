<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id', false, true)->nullable();
            $table->string('name')->nullable();
            $table->string('caption')->nullable();
            $table->string('description')->nullable();
            $table->string('url')->nullable();
            $table->string('img_path')->nullable();
            $table->string('img_name')->nullable();
            $table->integer('speed')->nullable();
            $table->tinyInteger('pause_on_hover')->nullable();
            $table->tinyInteger('loop_forever')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('parent_id')->references('id')->on('home_sliders')->onDelete('cascade');
        });

//        Schema::create('image_sliders', function (Blueprint $table) {
//            $table->increments('id');
//            $table->integer('home_slider_id', false, true)->nullable();
//            $table->string('name')->nullable();
//            $table->string('caption')->nullable();
//            $table->string('description')->nullable();
//            $table->string('url')->nullable();
//            $table->string('img_name')->nullable();
//            $table->string('img_path')->nullable();
//            $table->tinyInteger('status')->nullable();
//            $table->timestamps();
//            $table->softDeletes();
//
//            $table->foreign('home_slider_id')->references('id')->on('home_sliders')->onDelete('cascade');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_sliders');
//        Schema::dropIfExists('image_sliders');
    }
}
