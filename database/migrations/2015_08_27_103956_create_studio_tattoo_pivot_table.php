<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudioTattooPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studio_tattoo', function(Blueprint $table) {
            $table->integer('studio_id')->unsigned()->index();
            $table->foreign('studio_id')->references('id')->on('studios')->onDelete('cascade');
            $table->integer('tattoo_id')->unsigned()->index();
            $table->foreign('tattoo_id')->references('id')->on('tattoos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('studio_tattoo');
    }
}
