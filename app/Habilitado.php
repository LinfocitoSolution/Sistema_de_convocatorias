<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilitado extends Model
{
    public $table='habilitados';    
    protected $fillable = [
        'id',
        'name',
        'description',

    ];
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}