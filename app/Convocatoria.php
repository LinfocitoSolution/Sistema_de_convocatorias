<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $fillable = ['id', 'titulo_convocatoria', 'descripcion'];
    public function requerimientos()
    {
        return $this->belongsToMany(Requerimiento::class)->withTimestamps();
    }
    public function fechas()
    {
        return $this->belongsToMany(Fecha::class)->withTimestamps();
    }
}
