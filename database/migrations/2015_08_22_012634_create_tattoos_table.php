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
            $table->integer('artist_id')->unsigned()->index(); // artist who's tagged with tattoo
            $table->integer('user_id')->unsigned()->index(); // user who ve uploaded this
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
