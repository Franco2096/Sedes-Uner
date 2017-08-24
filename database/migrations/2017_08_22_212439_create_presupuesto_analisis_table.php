<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestoAnalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuesto_analisis', function (Blueprint $table) {
            $table->increments('id');

            $table->timestamps();
            $table->decimal('precio',10,2);
            $table->integer('analisis_id')->unsigned();
            $table->foreign('analisis_id')->references('id')->on('analisis');


            $table->integer('presupuesto_id')->unsigned();
            $table->foreign('presupuesto_id')->references('id')->on('presupuestos');

            $table->integer('analista_id')->unsigned();
            $table->foreign('analista_id')->references('id')->on('users');

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
        Schema::dropIfExists('presupuesto_analisis');
    }
}
