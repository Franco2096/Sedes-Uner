<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Clientes extends Model
{
    protected $table = 'clientes';
    protected $fillable =['id', 'nombre','dni','provincia','ciudad','direccion','email'];
    

      public function Presupuesto()
    {
        return $this->hasMany('App\Presupuesto');
    }
}