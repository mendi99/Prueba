<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasajeroVueloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajero_vuelo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vuelo_id');
            $table->unsignedBigInteger('pasajero_id');
            $table->foreign('vuelo_id')->references('id')->on('vuelos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pasajero_id')->references('id')->on('pasajeros')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasajero_vuelo');
    }
}
