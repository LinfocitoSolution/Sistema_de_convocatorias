<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class LoginController extends Controller
{
    
    public function create()
    {
       return view("calls.register");
    }
    public function store()
    {
        $usuario = new Usuario();
        $usuario->nombre_usuario = $request->input('nombre');
        $usuario->password = $request->input('password');
        $usuario->save();
        return 'Saved';
    }
}
