<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id', false, true)->nullable();
            $table->integer('city_id', false, true)->nullable();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
