<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarroOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carro__orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_order');
            $table->foreign('id_order')->references('id')->on('orders');
            $table->unsignedBigInteger('id_carro');
            $table->foreign('id_carro')->references('carro_id')->on('carros');
            $table->unsignedBigInteger('id_documento');
            $table->foreign('id_documento')->references('documento_id')->on('documentos');
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
        Schema::dropIfExists('carro__orders');
    }
}
