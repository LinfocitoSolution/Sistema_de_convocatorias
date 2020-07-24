<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion_conocimiento extends Model
{
    public $table='calificacion_conocimientos';    
    protected $fillable = [
        'id',
        'user_id',
        'score',
    ];
    public function user()
    {
        return $this->belongsTo('User');
    }
}
