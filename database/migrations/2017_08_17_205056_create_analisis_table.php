<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnalisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('analisis', function (Blueprint $table) {
            $table->increments('id_analisis');
            $table->string('nombre')->nullable();
            $table->string('descripcion')->nullable();
            $table->enum('operativo', ['Si','No']);
            $table->text('precio')->nullable();
            $table->enum('tipo', ['Fisico Quimico','Microbiologico']);
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
        Schema::dropIfExists('analisis');
    }
}
