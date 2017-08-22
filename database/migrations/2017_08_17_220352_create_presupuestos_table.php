<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuestos', function (Blueprint $table) {
            $table->increments('id_presupuesto');
            $table->string('descripcion')->nullable();
            $table->enum('estado', ['En Espera','Aprobado por Cliente','Rechazado']);
            
            $table->datetime('fecha_emision');
            $table->timestamps();

            $table->integer('solicitud_id')->unsigned();
            $table->foreign('solicitud_id')->references('id_solicitud')->on('solicitudes');
            

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presupuestos');
    }
}
