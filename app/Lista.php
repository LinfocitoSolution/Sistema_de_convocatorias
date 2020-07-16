<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $table='Lista';

    protected $fillable = [
        'id',
        'name',
        'lastname',
        'codigo_auxiliatura',
        'habilitado/inhabilitado'        
        ];
    
}