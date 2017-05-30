<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->decimal('cost')->nullable();
            $table->integer('qty')->nullable();
            $table->decimal('price')->nullable();
            $table->double('discount')->nullable();
            $table->enum('discount_type', ['1', '2'])->nullable();
            $table->longText('short_description')->nullable();
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('code')->nullable();
            $table->string('origin_place')->nullable();
            $table->integer('city_id', false, true)->nullable();
            $table->integer('currency_id', false, true)->nullable();
            $table->integer('user_id', false, true)->nullable();
            $table->string('author')->nullable();
            $table->integer('can_order')->default(1);
            $table->tinyInteger('new')->default(0);
            $table->tinyInteger('popular')->default(0);
            $table->string('img_path')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('currency_id')->references('id')->on('currencies')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
