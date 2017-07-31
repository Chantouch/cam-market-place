<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertises', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->integer('types')->nullable();
            $table->string('link')->nullable();
            $table->unsignedInteger('partner_id', false)->nullable();
            $table->tinyInteger('active')->default(0);
            $table->dateTime('expired_at')->nullable();
            $table->string('path')->nullable();
            $table->timestamps();
            $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertises');
    }
}
