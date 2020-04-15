<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function articulo()//join
    {
    return $this->hasOne("App\Articulo"/*,"cliente_id","id"*/);
    }

    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }
    public function perfils()
    {
        return $this->belongsToMany("App\Perfil");
    }
    protected $fillable=["Nombre","Apellidos"];
}
