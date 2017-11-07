<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuestos extends Model
{
    protected $table = 'presupuestos';
    protected $fillable =['tipo_servicio','fecha','id','fecha_solicitud','TotalPresupuestado','nombreCliente','estado','solicitud_id'];



    public function Clientes()
    {
        return $this->belongsTo('App\Clientes');
    }
       public function Muestra()
    {
        return $this->hasMany('App\Muestra');
    }


}
