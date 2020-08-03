<?php

namespace App\Http\Controllers;
use App\Unidad;
use App\User;
use App\Habilitado;
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
use App\Http\Requests\RotuloRequest;
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
        $habilitado=new Habilitado();
        $curriculum = new Curriculum();
        $curriculum->user_id = Auth::user()->id;
        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $nombre = Auth::user()->id.$file->getClientOriginalName();
            $file->move(public_path().'/curriculums/', $nombre);
            $curriculum->pdf_file = $nombre;  
        } 
        $codAux = $request->input('requerimiento');
        $requerimiento = Requerimiento::where('codigo_auxiliatura', $codAux)->firstOrFail();
        $habilitado->save();
        $curriculum->save();
        Auth::user()->requerimientos()->attach($requerimiento->id);
        Auth::user()->habilitados()->attach($habilitado->id);
       
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
        $curriculum = Curriculum::where('user_id', '=', $user->id)->first();
        return view('postulante.show',compact('user', 'curriculum'));
    }
    
    public function edit(User $user)
    {        
        $curriculum = Curriculum::where('user_id', '=', $user->id)->first();
        return view('postulante.edit',compact('user', 'curriculum'));
    }
    public function cancelarPostulacion(User $user)
    {
        $user->requerimientos()->detach();
        $user->habilitados()->detach();
        $curriculum = Curriculum::where('user_id', '=', $user->id)->first();
        $curriculum->delete();
        return redirect('/');
    }
    public function update(PostulanteRequest $request,User $user)
    {
        $user->update($request->all());    
        $user->save();        
        return redirect(route('postulante.show',compact('user')))->with([ 'message' => 'Usuario actualizado exitosamente!', 'alert-type' => 'success' ]);
    }
    public function resetPassword()
    {
        return view('auth.resetPassword');
    }
    public function confirmarPassword(Request $request)
    {
        $hash = Auth::user()->password;
        $user = Auth::user();
        $password = $request->input('passviejo');
            $messages=[
                'password_confirm.same'=>'Campo confirmar contraseña y contraseña no coinciden',
                'password.regex'=>'La nueva contraseña es inválida, la contraseña debe tener al menos una letra y un numero para ser valido',
            ];
            $validator = Validator::make($request->all(), [
                'password'=>'required|max:25|min:8|regex:/^(?=.*[A-Za-z\d$@$#!%*?&])(?=.*\d)[A-Za-z\d$@$#!%*?&]{8,25}$/S',
                'password_confirm'=>'required|same:password', 
            ],$messages);
            if(password_verify ( $password , $hash ))
            {
                if ($validator->fails()) 
                {
                    return redirect()->back()->withErrors($validator);
                }
                $user->password= $request->input('password');
                $user->password=(bcrypt( $user->password));
                $user->save();
                return redirect(route('postulante.show',compact('user')))->with([ 'message' => 'Contraseña actualizada con éxito!', 'alert-type' => 'success' ]);
            }
            else
            {
                return redirect(route('reset.password'))->with([ 'messageDanger' => 'Su contraseña actual es incorrecta', 'alert-type' => 'danger' ]);     
            }
    }
}