<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Clientes extends Model
{
    protected $table = 'clientes';
    protected $fillable =['nombre','dni','provincia','ciudad','direccion','email'];
    
}