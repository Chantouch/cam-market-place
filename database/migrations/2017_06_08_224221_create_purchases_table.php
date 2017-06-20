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
            $table->decimal('total_paid_kh', 20, 2)->nullable();
            $table->decimal('total_paid_foreign', 20, 2)->nullable();
            $table->string('contact_name', 191)->nullable();
            $table->string('contact_phone', 18)->nullable();
            $table->string('shipping_address', 255)->nullable();
            $table->string('shipping_method', 255)->nullable();
            $table->string('payment_method', 255)->nullable();
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
