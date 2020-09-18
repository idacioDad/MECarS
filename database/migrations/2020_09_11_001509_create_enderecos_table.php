<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_parque');
            $table->foreign('id_parque')->references('parque_id')->on('parques');
            $table->unsignedBigInteger('id_seguradora');
            $table->foreign('id_seguradora')->references('seguradora_id')->on('seguradoras');
            $table->unsignedBigInteger('id_tracker');
            $table->foreign('id_tracker')->references('tracker_id')->on('trackers');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('ender_provincia');
            $table->string('distrito/cidade');
            $table->string('ender_rua_Av');
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
        Schema::dropIfExists('enderecos');
    }
}
