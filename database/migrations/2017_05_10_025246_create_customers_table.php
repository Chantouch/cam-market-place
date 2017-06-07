<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cus_code')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->unique();
            $table->string('mobile')->nullable();
            $table->string('password');
            $table->integer('city_id', false,true)->nullable();
            $table->integer('country_id',false,true)->nullable();
            $table->string('verified_code')->nullable();
            $table->string('temp_enroll')->nullable();
            $table->string('enrollment_id')->nullable();
            $table->integer('verified_by', false, true)->nullable();
            $table->dateTime('verified_at')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('verified_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
