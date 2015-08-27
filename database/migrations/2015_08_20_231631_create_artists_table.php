<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->integer('experience')->nullable();
            $table->string('cover')->default('cover.jpg');
            $table->text('bio')->nullable();

            $table->string('address', 111)->nullable();
            $table->string('city', 55)->nullable();
            $table->string('country', 55)->nullable();
            $table->string('latitude', 22)->nullable();
            $table->string('longitude', 22)->nullable();

            $table->integer('recommend')->unsigned();
            $table->integer('views')->unsigned();
            $table->enum('membership', ['free', 'premium', 'platinum'])->default('free');
            $table->boolean('verified');

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
        Schema::drop('artists');
    }
}
