<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requerimiento extends Model
{
    protected $table='requerimientos';

    protected $fillable = [
        'id',
        'cantidad_de_auxiliares',
        'cantidad_horas_academicas',
        'nombre_auxiliatura',
        'codigo_auxiliatura',
        'tipo_requerimiento',        
        ];
    protected $hidden = [
        'remember_token',
    ];
    public function convocatorias()
    {
        return $this->belongsToMany(Convocatoria::class)->withTimestamps();
    }
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    public function habilitados()
    {
        return $this->belongsToMany(Habilitado::class)->withTimestamps();
    } 
}

