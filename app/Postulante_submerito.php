<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulante_submerito extends Model
{
    public $table='postulante_submerito';    
    protected $fillable = [
        'id',
        'user_id',
        'submerito_id',        
        'score',
    ];
    public function user()
    {
        return $this->belongsTo('User');
    }
    public function submerito()
    {
        return $this->belongsTo('Submerito');
    }
    
}
