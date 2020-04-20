<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Usuario extends Model implements AuthenticatableContract
{

    use Authenticatable;
    public $table='usuarios';
    protected $fillable=[
        "id",
        "nombre",
        "apellido",
        "email",              //moidificar el archivo del modelo para borrar
        "carrera",
        "NombreUsuario",
        "password",
    ];
    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }
}
