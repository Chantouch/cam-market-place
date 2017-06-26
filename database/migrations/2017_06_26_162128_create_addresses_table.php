<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id', false, false);
            $table->string('alias')->nullable();
            $table->string('company')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->longText('address');
            $table->longText('address_complement')->nullable();
            $table->integer('zip_postal_code');
            $table->integer('city_id', false, false);
            $table->integer('country_id', false, false);
            $table->string('phone')->nullable();
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
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
        Schema::dropIfExists('addresses');
    }
}
