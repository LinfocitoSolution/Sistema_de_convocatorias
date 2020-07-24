<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tematica extends Model
{
    public $table='tematicas';    
    protected $fillable = [
        'id',
        'name',
    ];
    public function tematica_requerimietos(){
        return $this->hasMany('Tematica_requerimiento');
    }
    public function postulante_tematica_requerimientos(){
        return $this->hasMany('Postulante_tematica_requerimiento');
    }
}
