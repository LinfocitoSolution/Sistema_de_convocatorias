<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $table='areas';

    protected $fillable = [
        'name',
        'description'        
        ];
    protected $hidden = [
        'remember_token',
    ];
}

