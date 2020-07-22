<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tematica_requerimiento extends Model
{   
    protected $fillable = [
        'id',
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
    
}
