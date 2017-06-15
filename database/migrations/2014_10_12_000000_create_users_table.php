<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('user_id')->nullable()->comment('To verified partner by admin');
            $table->enum('gender', ['0', '1', '2', '3'])->default(0);
            $table->enum('role', ['0', '1', '2'])->default(0);
            $table->string('temp_enroll')->nullable();
            $table->string('enrollment_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('users');
    }
}
