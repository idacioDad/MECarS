<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeguradorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seguradoras', function (Blueprint $table) {
            $table->bigIncrements('seguradora_id');
            $table->string('seguradora_nome');
            $table->string('seguradora_logo')->nullable();
            $table->string('seguradora_email');
            $table->bigInteger('seguradora_contacto');
            $table->string('seguradora_avenida');
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
        Schema::dropIfExists('seguradoras');
    }
}
