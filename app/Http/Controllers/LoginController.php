<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Session;


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
     return 'NombreUsuario';
 }
    public function LoginUsuario(Request $request)
    {
        $username_or_email=$request->get('NombreUsuarioP');
        $password=$request->get('passwordP');

        if(Auth::attempt(array('NombreUsuario'=>$username_or_email, 'password'=>$password)))
        {
            //return "funciona :v";
            return redirect()->intended('registrado');
        }
        elseif(Auth::attempt(array('email'=>$username_or_email, 'password'=>$password)))
        { 
            return redirect()->intended('registrado');
        }
            
            //return Redirect::to("login")->withSuccess('nel mijo tienes que registrarte');
            return Redirect::to("login")->withErrors([
                'error' => 'Se ha producido un error. Verifique sus credenciales o regístrese',
            ]);
            //return 'tmr sigue sin funcionar ;v' . "n" . $NombreUsuario . "p" . $password;
    }
    
    public function noregister()
    {
       
        return view("calls.noregister");
        
    }
    public function login()
    {
        return view("logins.login");
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        //$user=Auth::user();
        //echo 'adios : ' . $user->nombre . 'hasta nunca' . $user->role->nombre_rol;
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
            $user=Auth::user();
            if($user->esRol()=='administrador')
            {
                //return redirect()->intended('noregister');
               echo 'que hay : ' . $user->nombre . 'hola' . $user->role->nombre_rol;
               
               return view("admin.administrador");
            }
            if($user->esRol()=='postulante')
            {
                //return redirect()->intended('noregister');
               echo 'que hay : ' . $user->nombre . 'hola' . $user->role->nombre_rol;
               
               return view("users.postulante");
            }
            if($user->esRol()=='secretaria')
            {
                //return redirect()->intended('noregister');
               echo 'que hay : ' . $user->nombre . 'hola' . $user->role->nombre_rol;
               
               return view("users.secretaria");
            }
            if($user->esRol()=='jefe de departamento')
            {
                //return redirect()->intended('noregister');
               echo 'que hay : ' . $user->nombre . 'hola' . $user->role->nombre_rol;
               
               return view("users.jefeDep");
            }
            if($user->esRol()=='comision merito')
            {
                //return redirect()->intended('noregister');
               echo 'que hay : ' . $user->nombre . 'hola' . $user->role->nombre_rol;
               
               return view("users.comision_merito");
            }
            if($user->esRol()=='comision conocimiento')
            {
                //return redirect()->intended('noregister');
               echo 'que hay : ' . $user->nombre . 'hola' . $user->role->nombre_rol;
               
               return view("users.comision_conocimiento");
            }
            if($user->esRol()=='director de carrera')
            {
                //return redirect()->intended('noregister');
               echo 'que hay : ' . $user->nombre . 'hola' . $user->role->nombre_rol;
               
               return view("users.director");
            }
            else {
                echo 'hola no administrador';
            }
            
            //return view("calls.registrado");
        }
        else 
        {
            Redirect::to("login")->withSuccess('nel mijo no pasaste el check');
        }
       
    }



   




























    /*public function LoginUsuario(request $request)
    {
       
       
        
        if(Auth::attempt(array('NombreUsuario'=>$request->NombreUsuario,'password'=>$request->password,)))
        {
            $respuesta='nombre de usuario: ' . $request->NombreUsuario;
            $respuesta+='password ' . $request->password;
            return $respuesta;
        }
        else 
        {
            return 'error';   
        }

        
       
       
        $credenciales=$this->Validate(request(),
        [
            'NombreUsuario'=>'max:20',
            'password'=>'max:20'
        ]);
        if(Auth::attempt($credenciales))
        {
            return 'Login ok';
        }
        else 
        {
            return back()
                
                ->withErrors( ['NombreUsuario'=>trans(auth.failed)])
                ->withInput(request(['NombreUsuario']));
        }
    }*/

}
