<?php

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
            $table->string('name'); //full name for user, artist and studio name for studios
            $table->string('avatar')->default('avatar.jpg');
            $table->string('email')->unique();
            $table->string('contact')->nullable();
            $table->string('password', 60);
            $table->boolean('social');
            $table->boolean('active');
            $table->enum('type', ['studio', 'artist', 'member', 'none'])->default('none');
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
        Schema::drop('users');
    }
}
