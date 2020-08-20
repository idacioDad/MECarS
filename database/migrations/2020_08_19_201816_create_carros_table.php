<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->bigIncrements('carro_id');
            $table->unsignedBigInteger('id_parque');
            $table->foreign('id_parque')->references('parque_id')->on('parques');
            $table->unsignedBigInteger('id_modelo');
            $table->foreign('id_modelo')->references('modelo_id')->on('modelos');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('categoria_id')->on('categorias');
            $table->float('carro_preco');
            $table->integer('carro_ano_fabrico');
            $table->float('carrro_Km');
            $table->string('carro_foto')->nullable();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carros');
    }
}
