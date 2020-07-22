<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilitado extends Model
{
    public $table='habilitados';    
    protected $fillable = [
        'id',
        'nameMeritos',
        'submerito',
        'puntaje',
        'puntajePorcentaje',

    ];
    
}