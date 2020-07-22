<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submerito extends Model
{
    protected $fillable = [
        'id',
        'merito_id',    
        'description', 
        'score',  
        'name',            
    ];
    public function merito()
    {
        return $this->belongsTo('Merito');
    }
}
