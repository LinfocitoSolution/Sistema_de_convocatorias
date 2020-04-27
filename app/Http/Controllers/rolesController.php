<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class rolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('esRol');//middleware
    }
    public function adminV()
    {
        $nombre=Auth::user();
        echo "hola administrador/director: " . "" . $nombre->nombre;
        return view('admin.administrador');
    }
    public function comisionConocimientoV()
    {
        $nombre=Auth::user();
        echo "hola usuario de la comision de conocimiento: " . "" . $nombre->nombre;
        return view('users.comision_conocimiento');
    }
    public function comisionMeritoV()
    {
        $nombre=Auth::user();
        echo "hola usuario de la comision de meritos: " . "" . $nombre->nombre;
        return view('users.comision_merito');
    }
    public function jefeDep()
    {
        $nombre=Auth::user();
        echo "hola Jefe de Departamento: " . "" . $nombre->nombre;
        return view('users.jefeDep');
    }
    public function secretaria()
    {
        $nombre=Auth::user();
        echo "hola secretaria: " . "" . $nombre->nombre;
        return view('users.secretaria');
    }
    public function postulante()
    {
        $nombre=Auth::user();
        echo "hola postulante: " . "" . $nombre->nombre;
        return view('users.postulante');
    }
    public function director()
    {
        $nombre=Auth::user();
        echo "hola director de carrera: " . "" . $nombre->nombre;
        return view('users.director');
    }
}
