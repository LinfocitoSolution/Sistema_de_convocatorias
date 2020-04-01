<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrarConvocatoriaController extends Controller
{
    public function guardarDatos()
    {
        $descripcion=GET["description"];
        $requisitos=GET["requirements"];
        $documentos=GET["docs"];
        $formato=GET["format"];
        return 'prueba de las variables son'.$descripcion.$requisitos.$documentos.$formato;
    }

}

