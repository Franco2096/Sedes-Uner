<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuestraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muestra', function (Blueprint $table) {
            $table->increments('id_muestra');
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
           
            $table->enum('estado', ['Guardada','Desechada']);
            $table->datetime('fecha_ingreso');
            $table->timestamps();

            $table->integer('presupuesto_id')->unsigned();
            $table->foreign('presupuesto_id')->references('id_presupuesto')->on('presupuestos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('muestra');
    }
}
