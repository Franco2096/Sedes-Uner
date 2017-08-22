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
            $table->increments('id_presupuesto_analisis');

            $table->timestamps();
            $table->decimal('precio',10,2);
            $table->integer('analisis_id')->unsigned();
            $table->foreign('analisis_id')->references('id_analisis')->on('analisis');
            

            $table->integer('presupuesto_id')->unsigned();
            $table->foreign('presupuesto_id')->references('id_presupuesto')->on('presupuestos');

            $table->integer('analista_id')->unsigned();
            $table->foreign('analista_id')->references('id_user')->on('users');

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
