<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presupuesto_Determinacion extends Model
{
    protected $table = 'presupuesto_determinacion';
    protected $fillable =['valorDeterminacion','valorServicio','id','valorPersonal','cantidad','presupuesto_id','determinacion_id'];

    public function Presupuestos()
    {
        return $this->belongsTo('App\Presupuestos');
    }
       public function Determinaciones()
    {
        return $this->hasMany('App\Determinaciones');
    }
}
