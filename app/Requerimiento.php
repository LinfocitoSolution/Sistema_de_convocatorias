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
    public function tematicas()
    {
        return $this->belongsToMany(Tematica::class)->withTimestamps();
    }
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    public function tematica_requerimietos(){
        return $this->hasMany('Tematica_requerimiento');
    }
    
    public function postulante_tematica_requerimientos(){
        return $this->hasMany('Postulante_tematica_requerimiento');
    }
}

