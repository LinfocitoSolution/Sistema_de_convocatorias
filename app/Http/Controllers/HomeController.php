<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response;
use App\User;
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
        return view('index', [ 'convocatorias' => $convocatorias]);
    }

    public function registrado()
    {
        if(Auth::check())
        {               
               return view("admin.administrador");
               //return view("admin.rolpostulante");
        }
       
    }
    public function areas(){

        return view('admin.areas.index');
    }
    public function convocatorias(){
        return view('admin.convocatoria.create');
    }
    /*public function roles(){
        return view('admin.roles.index');

    }*/
    public function usuarios(){
        return view ('admin.usuarios.index');
    }


}
