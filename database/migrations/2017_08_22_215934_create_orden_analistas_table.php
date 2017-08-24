<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenAnalistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_analistas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('analista_id')->unsigned();
            $table->foreign('analista_id')->references('id')->on('users');

            $table->integer('orden_trabajo_id')->unsigned();
            $table->foreign('orden_trabajo_id')->references('id')->on('orden_trabajo');

            $table->integer('presupuesto_analisis_id')->unsigned();
            $table->foreign('presupuesto_analisis_id')->references('id')->on('presupuesto_analisis');
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
        Schema::dropIfExists('orden_analistas');
    }
}
