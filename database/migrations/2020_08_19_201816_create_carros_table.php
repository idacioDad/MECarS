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
            $table->float('carro_preco');
            $table->integer('carro_ano_fabrico');
            $table->float('carrro_Km');
            $table->string('carro_foto')->nullable();
           /* $table->parque_id();
            $table->modelo_id();
            $table->cateoria_id();
            $table->timestamps();*/
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
