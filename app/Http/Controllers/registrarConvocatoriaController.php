<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrarConvocatoriaController extends Controller
{
    public function guardarDatos()
    {
        $descripcion=GET["descriptionFormTextarea"];
        $requisitos=GET["requirementsFormTextarea"];
        $documentos=GET["docsFormTextarea"];
        $formato=GET["formatFormTextarea"];
        return "prueba de las variables son" . $descripcion . $requisitos . $documentos . $formato;
    }

}

