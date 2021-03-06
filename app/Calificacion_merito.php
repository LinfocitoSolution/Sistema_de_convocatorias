<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion_merito extends Model
{
    public $table='calificacion_meritos';    
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
