<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Contracts\Auth\Authenticatable; */

class User extends Model implements  AuthenticatableContract
{
    use Notifiable;

   
   
   
    use Authenticatable;
    public $table='users';
    protected $fillable=[
        "id",
        "name",
        "lastname",
        "email",              //moidificar el archivo del modelo para borrar
        "career",
        "username",
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
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*protected $fillable = [
        'name', 'email', 'password',
    ];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*protected $hidden = [
        'password', 'remember_token',
    ];
    */
}
