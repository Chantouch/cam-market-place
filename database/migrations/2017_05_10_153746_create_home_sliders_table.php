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
            $table->string('name')->nullable();
            $table->string('caption')->nullable();
            $table->string('description')->nullable();
            $table->string('url')->nullable();
            $table->tinyInteger('pause_on_hover')->default(0);
            $table->tinyInteger('loop_forever')->default(0);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('home_sliders');
    }
}
