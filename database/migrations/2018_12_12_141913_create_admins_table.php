<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

//      Schema::table('users', function (Blueprint $table) {
//     $table->string('name', 50)->nullable()->change();
// });
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',255)->nullable();
            $table->string('lastname',255)->nullable();
            $table->string('username',255)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone',50)->nullable();
            $table->string('image',255)->nullable();
            $table->string('description',500)->nullable();
            $table->string('dob')->nullable();
            $table->string('sex',50)->nullable();
            $table->string('level',50)->nullable();
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
        Schema::dropIfExists('admins');
    }
}
