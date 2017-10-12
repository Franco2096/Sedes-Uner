<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Determinaciones extends Model
{
    protected $table = 'determinaciones';
    protected $fillable =['determinacion','tecnica','tipo','estado'];


    
}
