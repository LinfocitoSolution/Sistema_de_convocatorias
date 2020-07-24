<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    public $table='libros';    
    protected $fillable = [
        'id',
        'name',
        'documento',
        'fecha_entrega',

    ];
    public function user()
    {
        return $this->belongsTo('User');
    } 
}
