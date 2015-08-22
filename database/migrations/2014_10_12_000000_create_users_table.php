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
            $table->string('name');
            $table->string('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('contact')->nullable();
            $table->string('password', 60);
            $table->string('city', 111)->nullable();
            $table->string('country', 111)->nullable();
            $table->boolean('social');
            $table->boolean('verified');
            $table->boolean('profileComplete');
            $table->boolean('active');
            $table->enum('type', ['studio', 'artist', 'member', 'none'])->default('none');
            $table->integer('views');
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
