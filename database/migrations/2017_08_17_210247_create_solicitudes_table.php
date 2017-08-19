<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id_solicitudes');
            $table->integer('cliente_id');
            $table->integer('usuario_id');
            $table->string('titulo');
            $table->string('descripcion');
            $table->enum('estado', ['En espera', 'Atendida']);
            $table->datetime('fecha');
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
        Schema::dropIfExists('solicitudes');
    }
}
