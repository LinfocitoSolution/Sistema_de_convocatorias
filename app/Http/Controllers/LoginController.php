<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*use AuthenticatesUsers;
    protected $guard='login';
    public function funciona()
    {
        return 'funciona';
    }*/
    protected $guard='login';
    public function loginUsername()
 {
     return 'NombreUsuario';
 }
    public function LoginUsuario(Request $request)
    {
        $NombreUsuario=$request->get('NombreUsuarioP');
        $password=$request->get('passwordP');

        
        if(Auth::attempt(array('NombreUsuario'=>$NombreUsuario, 'password'=>$password)))
        {
            return "funciona";
        }
        else 
        {
            return 'tmr sigue sin funcionar ;v' . "n" . $NombreUsuario . "p" . $password;
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
