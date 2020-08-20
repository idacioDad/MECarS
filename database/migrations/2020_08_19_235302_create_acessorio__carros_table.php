<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcessorioCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acessorio__carros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_carro');
            $table->foreign('id_carro')->references('carro_id')->on('carros');
            $table->unsignedBigInteger('id_acessorio');
            $table->foreign('id_acessorio')->references('acessorio_id')->on('acessorios');
            //$table->carro_id();
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
        Schema::dropIfExists('acessorio__carros');
    }
}
