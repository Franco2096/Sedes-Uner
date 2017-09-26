<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuestos extends Model
{
    protected $table = 'presupuestos';
    protected $fillable =['descripcion','estado','solicitud_id','fecha_emision','usuario_id'];



    public function Clientes()
    {
        return $this->belongsTo('App\Clientes');
    }
       public function Muestra()
    {
        return $this->hasMany('App\Muestra');
    }


}
