<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;

class User extends Model implements  AuthenticatableContract
{
    use HasRoles;
    use Notifiable;         
    use Authenticatable;

    public $table='users';    
    protected $fillable = [
        'id',
        'carrera_id',
        'name',
        'lastname',
        'email',              //moidificar el archivo del modelo para borrar
        'direction',
        'telephone',
        'username',
        'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    // public function setPasswordAttribute($value) {
    //     $this->attributes['password'] = bcrypt($value);
    // }

    public function carrera()
    {
        return $this->belongsTo('Carrera');
    }
    public function curriculum()
    {
        return $this->hasOne('Curriculum');
    }
    public function habilitados()
    {
        return $this->belongsToMany(Habilitado::class)->withTimestamps();
    }  
    public function requerimientos()
    {
        return $this->belongsToMany(Requerimiento::class)->withTimestamps();
    }
    public function calificacion_merito() {
       return $this->hasOne('Calificacion_merito');
    }
    public function postulante_submeritos()
    {
        return $this->belongsToMany(Postulante_submerito::class)->withTimestamps();
    }  
    
}
