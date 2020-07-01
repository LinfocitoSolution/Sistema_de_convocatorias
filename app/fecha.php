<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    protected $fillable = ['id', 'evento', 'fecha','fechaF', 'ubicacion'];
   
}
