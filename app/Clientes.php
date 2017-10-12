<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Clientes extends Model
{
    protected $table = 'clientes';
    protected $fillable =['id', 'nombre','apellido','dni','pais','provincia','ciudad','direccion','email','empresa','estado'];
    

      public function Presupuesto()
    {
        return $this->hasMany('App\Presupuesto');
    }
}