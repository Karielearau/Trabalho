<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaCaminhao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caminhoes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placa');
            $table->string('modelo');
            $table->string('marca');
            $table->string('cor');
            $table->string('ano');
            $table->string('renavan');                                                     
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
        Schema::dropIfExists('caminhoes');
    }
}
