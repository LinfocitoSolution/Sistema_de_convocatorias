<?php

namespace App\Http\Controllers;
use App\Unidad;
use App\User;
use App\Convocatoria;
use App\Requerimiento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Redirect,Response;
use App\Carrera;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;
use Validator;
use App\Http\Requests\PostulanteRequest;

class PostulantController extends Controller
{
    public function index()
    {
        $carreras = Carrera::all();
        $convocatoria=Convocatoria::all();
        return view('convocatoria.generar_rotulo',compact('convocatoria','carreras'));
      
    } 
    public function guardarRotulo()
    {
          return redirect('/');;
    }
    public function primer_paso()
    {   
        
        $unidad=Unidad::all();

        return view('convocatoria.primer_paso',compact('unidad'));
    }
    public function segundo_paso()
    {
        $convocatoria =Convocatoria::all();

        return view('convocatoria.segundo_paso', compact('convocatoria'));
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
