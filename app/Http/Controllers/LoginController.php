<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use \Illuminate\Support\Facades\Validator;
use Auth;

class LoginController extends Controller
{
    
    /*public function RegistroCliente(Request $request)
    {
        $validacion = Validator ::make($request->all(),
            [
               'vchNombre' => 'required|max:50',
                'vchAPaterno' => 'required|max:50',
                'vchAMaterno' => 'required|max:50',
                'email' => 'email|unique:tbl_usuario',
                'password' => 'required|min:6'
            ]);
        if ($validacion->fails())
        {
            return redirect('/#register')
                ->withInput()
                ->withErrors($validacion);
        }

        $user = new Usuario();
        $user->vchNombre = $request->vchNombre;
        $user->vchAPaterno = $request->vchAPaterno;
        $user->vchAMaterno = $request->vchAMaterno;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return 'Completado';

    }*/
    public function LoginUsuario(request $request)
    {
       
       
        
       /* if(Auth::attempt(array('NombreUsuario'=>$request->NombreUsuario,'password'=>$request->password,)))
        {
            $respuesta='nombre de usuario: ' . $request->NombreUsuario;
            $respuesta+='password ' . $request->password;
            return $respuesta;
        }
        else 
        {
            return 'error';   
        }*/

        
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
    }

}
