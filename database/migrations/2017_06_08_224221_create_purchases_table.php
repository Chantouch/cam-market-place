<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id', false, true);
            $table->decimal('total', 20, 2)->nullable();
            $table->integer('address_id', false,true);
            $table->string('shipping_method', 255)->nullable();
            $table->string('payment_method', 255)->nullable();
            $table->string('order_reference', 255)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
