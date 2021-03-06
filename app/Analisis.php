<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analisis extends Model
{
    protected $table = 'analisis';
    protected $fillable =['nombre','descripcion','operativo','precio','tipo'];
    protected $hidden = [
        'descripcion',
    ];
}
