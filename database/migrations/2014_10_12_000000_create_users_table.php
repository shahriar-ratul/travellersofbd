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
          $table->string('firstname',255)->nullable();
          $table->string('lastname',255)->nullable();
          $table->string('username',255)->nullable();
          $table->string('email')->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password',255);
          $table->string('phone',50)->nullable();
          $table->string('image',500)->default('user.jpg');
          $table->string('description',500)->nullable();
          $table->string('dob')->nullable();
          $table->string('sex',50)->nullable();
          $table->string('level',50)->default('1');
          $table->rememberToken();
          $table->timestamps();
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
