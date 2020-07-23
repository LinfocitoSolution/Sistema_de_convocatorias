<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merito extends Model
{
    protected $fillable = [
        'id',
        'merito',
        'puntaje',
        'score',
        'name',
    ];
}
    