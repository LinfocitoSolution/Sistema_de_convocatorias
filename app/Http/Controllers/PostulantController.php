<?php

namespace App\Http\Controllers;
use App\Unidad;
use App\User;
use App\Convocatoria;
use App\Requerimiento;
use App\Curriculum;
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
    public function index(Convocatoria $call)
    {
        $carreras = Carrera::all();
        // $convocatoria = Convocatoria::all();
        return view('convocatoria.generar_rotulo',compact('call','carreras'));
      
    } 
    public function guardarRotulo(Request $request)
    {
        $curriculum = new Curriculum();
        $curriculum->user_id = Auth::user()->id;
        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $nombre = time().$file->getClientOriginalName();
            $file->move(public_path().'/rotulos/', $nombre);
            $curriculum->pdf_file = $nombre;  
        } 
        $curriculum->save();
         return redirect('/');
    }
    public function primerPaso()
    {   
        
        $unidad=Unidad::all();

        return view('convocatoria.primer_paso',compact('unidad'));
    }
    public function segundoPaso(Unidad $uni)
    {
        $convocatoria =Convocatoria::all();
        return view('convocatoria.segundo_paso', compact('convocatoria', 'uni'));
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
