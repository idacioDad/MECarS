<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parques', function (Blueprint $table) {
            $table->bigIncrements('parque_id');
            $table->string('parque_nome');
            $table->string('parque_logo')->nullable();
            $table->string('parque_email');
            $table->bigInteger('parque_contacto');
            $table->string('parque_avenida');
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
        Schema::dropIfExists('parques');
    }
}
