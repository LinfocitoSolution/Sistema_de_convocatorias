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
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function setPasswordAttribute($value) {
        $this->attributes['password'] = bcrypt($value);
    }
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
    public function esRol()
    {
        if($this->role['nombre_rol']=='administrador')
        {
            return 'administrador';
        }
        else  if($this->role['nombre_rol']=='postulante')
        {
            return 'postulante';
        }
        else  if($this->role['nombre_rol']=='secretaria')
        {
            return 'secretaria';
        }
        else  if($this->role['nombre_rol']=='jefe de departamento')
        {
            return 'jefe de departamento';
        }
        else  if($this->role['nombre_rol']=='comision merito')
        {
            return 'comision merito';
        }
        else  if($this->role['nombre_rol']=='comision conocimiento')
        {
            return 'comision conocimiento';
        }
        else  if($this->role['nombre_rol']=='director de carrera')
        {
            return 'director de carrera';
        }

    }
}
