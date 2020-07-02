<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConocimientoCalif extends Model
{
    protected $table='ConocimientoCalif';

    protected $fillable = [
        'id',
        'item',
        'tematica',
        'codigo_auxiliatura',
        'puntaje'        
        ];
    
}
