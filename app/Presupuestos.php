<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuestos extends Model
{
    protected $table = 'presupuestos';
    protected $fillable =['descripcion','estado','id_solicitud','fecha_emision'];
}
