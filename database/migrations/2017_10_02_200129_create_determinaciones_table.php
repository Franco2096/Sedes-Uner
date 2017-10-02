<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeterminacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('determinaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('determinacion');
            $table->string('tecnica');
            $table->enum('tipo', ['microbiologico','fisico_quimico','tecnicas_especiales']);
            $table->enum('estado', ['habilitado','deshabilitado']);
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
        Schema::dropIfExists('determinaciones');
    }
}
