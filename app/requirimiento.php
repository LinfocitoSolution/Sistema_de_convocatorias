<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requirimiento extends Model
{
    protected $table='requerimientos';

    protected $fillable = [
        'id',
        'cantidad_de_auxiliares',
        'cantidad_horas_academicas',
        'nombre_auxiliatura',
        'codigo_auxiliatura'        
        ];
    protected $hidden = [
        'remember_token',
    ];
}
