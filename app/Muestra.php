<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muestra extends Model
{
   protected $table = 'muestra';
   protected $fillable =['nombre','descripcion','id_presupuesto','estado','fecha_ingreso'];
}
