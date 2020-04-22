<?php

namespace App\Http\Controllers;
use App\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class administradorController extends Controller
{
    public function __construct()
    {
        $this->middleware('esRol');//middleware
    }
    public function welcome()
    {
        $nombre=Auth::user();
        echo "hola admin: " . "" . $nombre->nombre;
        return view('welcome');
    }
}
