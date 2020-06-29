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
use App\Http\Requests\PostulanteRequest;

class PostulantController extends Controller
{
    public function index()
    {
        /*$users = User::all();
        return view('convocatoria.generar_rotulo',compact('users'));*/
        return view('convocatoria.generar_rotulo');
      
    } 
    public function show(User $user)
    { 
        return view('postulante.show',compact('user'));
    }
    
    public function edit(User $user)
    {        
        return view('postulante.edit',compact('user'));
    }
    public function update(PostulanteRequest $request,User $user)
    {
        $user->update($request->all());    
        $user->save();        
        return redirect(route('postulante.show',compact('user')))->with([ 'message' => 'Usuario actualizado exitosamente!', 'alert-type' => 'success' ]);
    }
}
