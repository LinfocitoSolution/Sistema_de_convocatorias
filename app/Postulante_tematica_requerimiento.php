<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulante_tematica_requerimiento extends Model
{
    protected $table='postulante_tematica_requerimiento';
    protected $fillable = [
        'id',
        'id_user',
        'tematica_id',
        'requerimiento_id',   
        'score', 
    ];
    
    public function tematica()
    {
        return $this->belongsTo('Tematica');
    }
    public function requerimiento()
    {
        return $this->belongsTo('Requerimiento');
    }
    public function user()
    {
        return $this->belongsTo('User');
    }
}
