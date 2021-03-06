<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response;
use App\User;
use App\Unidad;
use App\Curriculum;
use App\Convocatoria;
use App\Fecha;
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
        if(request()->has('unidad'))
        {
            $unidade = Unidad::all();
            $convocatorias = Convocatoria::where('unit_id',request("unidad"))->orderBy('created_at', 'asc')->take(15)->get();
            $user=User::all();
        }
        else
        {
            $unidade = Unidad::all();
            $convocatorias = Convocatoria::orderBy('created_at', 'asc')->take(15)->get();
            $user=User::all();
        }
        return view('index', compact('convocatorias','user','unidade'));
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
