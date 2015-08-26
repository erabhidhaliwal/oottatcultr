<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index(); //follower
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('artist_id')->unsigned()->index(); //whom follow request ll be sent
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');

            $table->boolean('accepted');
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
        Schema::drop('follows');
    }
}
