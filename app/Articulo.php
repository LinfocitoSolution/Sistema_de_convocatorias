<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    use SoftDeletes;
    protected $dates=['deleted_at'];
    //
    //protected $primaryKey="articulo";
    /*protected $fillable=[
        "Nombre_Articulo",
        "Precio",
        "Pais_Origen",              //moidificar el archivo del modelo para borrar
        "Observaciones",
        "Seccion"
    ];*/
    public function cliente()//join inverso del join entre cliente y articulo
    {
        return $this->belongsTo("App\Cliente");
    }
}
