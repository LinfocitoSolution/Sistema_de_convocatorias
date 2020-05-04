<?php
/* 
namespace App\Http\Controllers;
use App\User;
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
        echo "hola administrador/director: " . "" . $nombre->name;
        return view('admin.administrador');
    }
    public function comisionConocimientoV()
    {
        $nombre=Auth::user();
        echo "hola usuario de la comision de conocimiento: " . "" . $nombre->name;
        return view('users.comision_conocimiento');
    }
    public function comisionMeritoV()
    {
        $nombre=Auth::user();
        echo "hola usuario de la comision de meritos: " . "" . $nombre->name;
        return view('users.comision_merito');
    }
    public function jefeDep()
    {
        $nombre=Auth::user();
        echo "hola Jefe de Departamento: " . "" . $nombre->name;
        return view('users.jefeDep');
    }
    public function secretaria()
    {
        $nombre=Auth::user();
        echo "hola secretaria: " . "" . $nombre->name;
        return view('users.secretaria');
    }
    public function postulante()
    {
        $nombre=Auth::user();
        echo "hola postulante: " . "" . $nombre->name;
        return view('users.postulante');
    }
    public function director()
    {
        $nombre=Auth::user();
        echo "hola director de carrera: " . "" . $nombre->name;
        return view('users.director');
    }
}
*/