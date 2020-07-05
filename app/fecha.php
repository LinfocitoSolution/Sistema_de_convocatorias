<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    protected $fillable = ['id', 'evento', 'fechaI','fechaF', 'ubicacion'];
   
    public function convocatorias()
    {
        return $this->belongsToMany(Convocatoria::class)->withTimestamps();
    }
}
