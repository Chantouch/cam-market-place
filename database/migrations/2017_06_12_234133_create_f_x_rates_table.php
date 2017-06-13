<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFXRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_x_rates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('source_currency', false, true)->nullable();
            $table->integer('target_currency', false, true)->nullable();
            $table->decimal('exchange_rate')->nullable();
            $table->date('valid_from_date')->nullable();
            $table->date('valid_to_date')->nullable();
            $table->timestamps();

            $table->foreign('source_currency')->references('id')->on('f_x_rates')->onDelete('cascade');
            $table->foreign('target_currency')->references('id')->on('f_x_rates')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('f_x_rates');
    }
}
