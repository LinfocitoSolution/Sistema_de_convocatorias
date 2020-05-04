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
    // public function setPasswordAttribute($value) {
    //     $this->attributes['password'] = bcrypt($value);
    // }
}
