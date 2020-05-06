<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;
use Validator;


class LoginController extends Controller
{
    /*use AuthenticatesUsers;
    protected $guard='login';
    public function funciona()
    {
        return 'funciona';
    }*/
    //protected $guard='login';
    public function loginUsername()
 {
     return 'username';
 }
    public function LoginUsuario(Request $request)
    {
       
        $username_or_email=$request->get('NombreUsuarioP');        
        $password=$request->get('passwordP');
        // $valor=Auth::attempt(array('username'=>$username_or_email, 'password'=>$password));
        // dd($valor);

        /* Se puede agregar el atributo 'active' para verificar si es usuario ya se ha registrado: 'active' => 1*/
        if(Auth::attempt(array('username'=>$username_or_email, 'password'=>$password))
        || Auth::attempt(array('email'=>$username_or_email, 'password'=>$password))
        )
        {
            // return redirect()->intended('registrado');
            $verificable= $this->registrado();
        }
        else{
            $verificable= redirect('login')
            ->withErrors([
                'error' => 'Se ha producido un error. Verifique sus credenciales o regístrese'])
            ->withInput();
        }
        return $verificable;
    }
    
    public function noregister()
    {
        return view("index"); 
    }
    public function login()
    {
        return view("logins.login");
    }
    public function logout()
    {
       // Session::flush();
        Auth::logout();
        //$user=Auth::user();    
        return Redirect('login');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function registrado()
    {
        if(Auth::check())
        {               
               return view("admin.administrador");
        }
       
    }


}
