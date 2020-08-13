<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table='units';

    protected $fillable = [
        'id',
        'name',
        'description'        
        ];
    protected $hidden = [
        'remember_token',
    ];
    public function convocatorias(){
        return $this->hasMany('Convocatoria');
    }
    public function user()
    {
       return $this->belongsTo('User');
    } 
}
