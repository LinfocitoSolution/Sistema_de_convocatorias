<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    protected $table='convocatorias';
    protected $fillable = ['id','unit_id', 'titulo_convocatoria','gestion','requisitos'];
    public function requerimientos()
    {
        return $this->belongsToMany(Requerimiento::class)->withTimestamps();
    }
    public function unit()
    {
        return $this->belongsTo('Unidad');
    }    
    public function fechas()
    {
        return $this->belongsToMany(Fecha::class)->withTimestamps();
    }
}
