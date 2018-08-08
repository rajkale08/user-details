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
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('User_First_Name')->nullable();
            $table->string('User_Last_Name')->nullable();
            $table->string('User_Short_Name')->nullable();
            $table->string('User_Long_Name')->nullable();
            $table->string('email')->nullable();
            $table->string('User_Contact')->nullable();
            $table->string('country')->nullable();
            $table->string('City')->nullable();
            $table->integer('User_Zip')->nullable();
            $table->string('password')->nullable();
            $table->string('User_Description')->nullable();
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
