<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muestra extends Model
{
   protected $table = 'muestra';
   protected $fillable =['nombre','descripcion','presupuesto_id','estado','fecha_ingreso'];

      public function Presupuestos()
    {
        return $this->belongsTo('App\Presupuestos');
    }
}

