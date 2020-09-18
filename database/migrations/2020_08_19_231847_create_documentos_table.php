<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos', function (Blueprint $table) {
            $table->bigIncrements('documento_id');
            $table->unsignedBigInteger('id_seguradora');
            $table->foreign('id_seguradora')->references('seguradora_id')->on('seguradoras');
            $table->unsignedBigInteger('id_parque');
            $table->foreign('id_parque')->references('parque_id')->on('parques');
            $table->unsignedBigInteger('id_trackers');
            $table->foreign('id_trackers')->references('tracker_id')->on('trackers');
            $table->string('documento_nome');
            $table->string('documento_descr');
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
        Schema::dropIfExists('documentos');
    }
}
