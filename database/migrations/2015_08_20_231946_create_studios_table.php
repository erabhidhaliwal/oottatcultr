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
            $table->string('name');
            $table->string('contact', 22)->nullable();
            $table->string('city', 111);
            $table->string('country', 111);
            $table->string('latitude', 22);
            $table->string('longitude', 22);

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
