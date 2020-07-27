<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descripcion extends Model
{
    protected $fillable = ['id', 'descripcion', 'tipo_descripcion','score'];
}
