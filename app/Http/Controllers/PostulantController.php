<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Redirect,Response;
use App\Convocatoria;
use Illuminate\Support\Facades\Hash;
use Session;
use Validator;

class PostulantController extends Controller
{
    public function index()
    {
        /*$users = User::all();
        return view('convocatoria.generar_rotulo',compact('users'));*/
        return view('convocatoria.generar_rotulo');
      
    } 
}
