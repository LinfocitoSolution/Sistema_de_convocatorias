<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merito extends Model
{
    protected $fillable = [
        'id',
        'convocatoria_id',
        'description',
        'score',  
        'name',  
    ];
    public function submeritos(){
        return $this->hasMany('Submerito');
    }
    public function convocatoria()
    {
        return $this->belongsTo('Convocatoria');
    }

}
