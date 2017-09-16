<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalistasOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analistas_ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('analista_id')->unsigned();
            $table->foreign('analista_id')->references('id')->on('users');

            $table->integer('orden_trabajo_id')->unsigned();
            $table->foreign('orden_trabajo_id')->references('id')->on('orden_trabajo');

            $table->integer('analisis_presupuestos_id')->unsigned();
            $table->foreign('analisis_presupuestos_id')->references('id')->on('analisis_presupuestos');
            $table->string('resultado');
            $table->string('observacion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analistas_ordenes');
    }
}
