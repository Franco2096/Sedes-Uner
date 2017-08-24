<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_trabajo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->enum('estado', ['Pendiente', 'Aprobado', 'Rechazado']);

            $table->datetime('fecha');
            $table->timestamps();

            $table->integer('presupuesto_id')->unsigned();
            $table->foreign('presupuesto_id')->references('id')->on('presupuestos');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_trabajo');
    }
}
