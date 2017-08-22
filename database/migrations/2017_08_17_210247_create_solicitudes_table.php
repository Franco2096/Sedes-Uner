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
            $table->increments('id_solicitud');
          
            
            $table->string('titulo');
            $table->string('descripcion');
            $table->enum('estado', ['En espera', 'Atendida']);
            $table->datetime('fecha');
            $table->timestamps();
            
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id_cliente')->on('clientes');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id_admin')->on('admins');
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
