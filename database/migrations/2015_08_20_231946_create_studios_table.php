<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studios', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('title')->unique();
            $table->text('bio')->nullable();
            $table->string('contact', 22)->nullable();
            $table->string('cover')->nullable();
            $table->string('address')->nullable();
            $table->string('city', 111)->nullable();
            $table->string('country', 111)->nullable();
            $table->string('latitude', 22);
            $table->string('longitude', 22);
            $table->boolean('approved');

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
        Schema::drop('studios');
    }
}
