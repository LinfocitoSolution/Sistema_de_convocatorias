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
    public function index(Request $request)
    {
        $callid = $request->input('convoca');
        $call = Convocatoria::find($callid);
        $carreras = Carrera::all();
        return view('convocatoria.generar_rotulo',compact('call','carreras'));
    } 
    public function guardarRotulo(Request $request)
    {
        $curriculum = new Curriculum();
        $curriculum->user_id = Auth::user()->id;
        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $nombre = Auth::user()->id.$file->getClientOriginalName();
            $file->move(public_path().'/curriculums/', $nombre);
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
    public function segundoPaso(Request $request)
    {
        $uni = $request->input('unidad');
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
