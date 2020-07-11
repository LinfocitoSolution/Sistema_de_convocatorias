<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table='carreras';
    protected $fillable = [
        'id',
        'name',
    ];
    public function users(){
        return $this->hasMany('User');
    }
}
