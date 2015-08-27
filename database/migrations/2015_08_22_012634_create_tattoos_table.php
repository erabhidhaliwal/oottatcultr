<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTattoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tattoos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('url');
            $table->string('description')->nullable();
            $table->integer('user_id')->unsigned()->index(); // user who ve uploaded this
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('tattoos');
    }
}
