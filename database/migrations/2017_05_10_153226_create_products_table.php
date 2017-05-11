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
            $table->integer('category_id',false,true)->nullable();
            $table->decimal('cost')->nullable();
            $table->decimal('price')->nullable();
            $table->double('discount_percent')->nullable();
            $table->decimal('discount_amount')->nullable();
            $table->string('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('code')->nullable();
            $table->integer('city_id',false,true)->nullable();
            $table->integer('current_id',false,true)->nullable();
            $table->string('author')->nullable();
            $table->integer('language_id',false,true)->nullable();
            $table->tinyInteger('new')->default(0);
            $table->tinyInteger('popular')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
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
