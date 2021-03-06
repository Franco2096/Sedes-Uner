<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestoDeterminacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuesto_determinacion', function (Blueprint $table) {
            $table->increments('id');

            $table->double('valorDeterminacion', 8, 2);
            $table->double('valorServicio', 8, 2);
            $table->double('valorPersonal', 8, 2);

            $table->integer('cantidad');


            $table->integer('presupuesto_id')->unsigned();
            $table->foreign('presupuesto_id')->references('id')->on('presupuestos');

            $table->integer('determinacion_id')->unsigned();
            $table->foreign('determinacion_id')->references('id')->on('determinaciones');





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
        Schema::dropIfExists('presu_deter');
    }
}
