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
            $table->float('carro_Km');
            $table->string('carro_foto')->nullable();
            $table->string('carro_motorSize');
            $table->string('carro_motorCode');
            $table->string('carro_conducao');
            $table->string('carro_caixa');
            $table->string('carro_versaoClasse');
            $table->string('carro_volante');
            $table->string('carro_corExterna');
            $table->string('carro_combustivel');
            $table->float('carro_assentos');
            $table->float('carro_portas');
            $table->float('carro_peso');
            $table->float('carro_lotacao');
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
        Schema::dropIfExists('carros');
    }
}
