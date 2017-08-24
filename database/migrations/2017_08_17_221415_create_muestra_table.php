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
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
<<<<<<< HEAD
=======

>>>>>>> 73281b7170788ad26e9e0c1233f8a83f4bc808b0
            $table->enum('estado', ['Guardada','Desechada']);
            $table->datetime('fecha_ingreso');
            $table->timestamps();

<<<<<<< HEAD
            $table->integer('presupuesto_id')->unsigned();            
            $table->foreign('presupuesto_id')->references('id')->on('muestra');
=======
            $table->integer('presupuesto_id')->unsigned();
            $table->foreign('presupuesto_id')->references('id')->on('presupuestos');

>>>>>>> 73281b7170788ad26e9e0c1233f8a83f4bc808b0
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
