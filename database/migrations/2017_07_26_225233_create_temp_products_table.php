<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->string('product_code')->nullable;
            $table->timestamps();
            $table->foreign('user_id')->references('users')->on('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('temp_products');
    }
}
