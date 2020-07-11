<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response;
use App\User;
use App\Carrera;
use App\Convocatoria;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Validator;


class HomeController extends Controller
{
    /*use AuthenticatesUsers;
    protected $guard='login';
    public function funciona()
    {
        return 'funciona';
    }*/
    //protected $guard='login';
    public function index()
    {
        $convocatorias = Convocatoria::orderBy('created_at', 'asc')->take(8)->get();
        $user=User::all();    
        // $carreras = Carrera::all();        
        return view('index', [ 'convocatorias' => $convocatorias] ,['user'=>$user]);
    }

    public function registrado()
    {
        if(Auth::check())
        {               
               return view("admin.administrador");
               //return view("admin.rolpostulante");
        }
       
    }
    
    public function convocatorias(){
        return view('admin.convocatoria.create');
    }
    
    /*public function usuarios(){
        return view ('admin.usuarios.index');
    }*/


}
