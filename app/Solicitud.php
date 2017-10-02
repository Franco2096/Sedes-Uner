<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
   protected $table = 'solicitudes';
   protected $fillable =['tipo_servicio','estado','fecha','cliente_id','usuario_id'];
}
