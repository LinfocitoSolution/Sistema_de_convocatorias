<?php

namespace App\Http\Controllers;
use App\ConocimientoCalif;
use Illuminate\Http\Request;
use App\Unidad;
use App\User;
use App\Habilitado;
use App\Convocatoria;
use App\Requerimiento;
use App\Curriculum;
use App\Role;
use App\Carrera;
use App\Tematica;
use App\Tematica_requerimiento;
use App\Calificacion_conocimiento;
class ConocimientoCalifController extends Controller
{
    public function __construct()
    {
        $this-> middleware('permission:create tablaConocimientos')->only(['create','store']);
        $this-> middleware('permission:list tablaConocimientos')->only('index');
        $this-> middleware('permission:edit tablaConocimientos')->only(['edit','update']);
        // $this-> middleware('permission:list tablaConocimientos')->only('show');//show        
        $this-> middleware('permission:delete tablaConocimientos')->only('destroy');
  
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablas = Tematica_requerimiento::distinct()->get(['convocatoria_id']);
        $calls = Convocatoria::all();
        return view('admin.conocimientoCalif.index', compact('tablas', 'calls'));
    }
    public function primerPaso()
    {   
        $unidad=Unidad::all();
        return view('admin.conocimientoCalif.form_primerpaso',compact('unidad'));
    }
    public function segundoPaso(Request $request)
    {
        $uni = $request->input('unidad');
        $convocatorias =Convocatoria::where('unit_id','=', $uni)->whereYear('gestion', '=', '2020')->get();
        $tematicas=Tematica::all();
        $reqsLab = $tematicas->first()->requerimientos()->distinct()->get(['requerimiento_id']);  
        return view('admin.conocimientoCalif.form_segundopaso', compact('convocatorias', 'reqsLab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $callid = $request->input('convoca');
        $call = Convocatoria::find($callid);
        $tematicas = Tematica::all();
        $requerimientosLab = $call->requerimientos()->get();
        return view('admin.conocimientoCalif.create',compact('call', 'requerimientosLab', 'tematicas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Convocatoria $call)//DONDE GUARDO LAS NOTAS DE LAS TABLAS YA QUE PARA CONOCIMIENTO HAGO EL REGISTRO
    {                                                           // DE LA NOTA DEL POSTLANTE CONJUNTAMENTE CUANDO AGREGO LOS PORCENTAJES PARA CADA INCISO (ORAL-ESCRITO)
        $notas = $request->input('nota');
        $requerimientosLab = $call->requerimientos()->get();
        $tematicas = Tematica::all();
        if(array_sum($notas) <= 100*count($requerimientosLab))
        {
            $aux = 0;
            foreach($tematicas as $tm)
            {
                foreach($requerimientosLab as $r)
                {
                    if($r->id == $tm->requerimientos->first()->id)   
                    {
                        $tabla = new Tematica_requerimiento();
                        $tabla->requerimiento_id = $r->id;
                        $tabla->tematica_id = $tm->id;
                        $tabla->score = $notas[$aux];
                        $tabla->convocatoria_id=$call->id;
                        $tabla->unit_id=$call->unit_id;
                        $tabla->save();
                        $aux++;
                    }
                }
            
            }
             return redirect(route('conocimientoCalif.index'))->with(['message'=>'Tabla creada exitosamente!','alert-type'=>'success']);
        }
        else
        { //necesito que este mensaje sea en ROJO
            return redirect(route('conocimientoCalif.index'))->with(['message'=>'La tabla no se registró debido a que excedió el puntaje máximo permitido (100pts por requerimiento)!','alert-type'=>'danger']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.conocimientoCalif.edit', compact('conocimientoCalif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $conocimientoCalif->fill($request->all());
        // $conocimientoCalif->save();
        // return redirect(route('conocimientoCalif.index'))->with([ 'message' => 'Tabla  actualizada exitosamente!', 'alert-type' => 'success' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($item)
    {
        $tabla = Tematica_requerimiento::where('convocatoria_id', $item)->get();
        foreach($tabla as $tb)
        {
            $tb->delete();
        }
        return redirect(route('conocimientoCalif.index'))->with([ 'message' => 'Tabla  eliminada!', 'alert-type' => 'success' ]);
    }
    public function listarPostulantes()
    {
        $postulantes = User::where('carrera_id', '!=', 'null')->get();
        return view('admin.conocimientoCalif.listaPostulantes', compact('postulantes'));
    }

    public function calificarPostulant(User $user)
    {
        $tematicas = Tematica::all();
        $requerimientoId = $user->requerimientos->first()->id;//requerimiento al que se postula
        $notas = Tematica_requerimiento::where('requerimiento_id', '=', $requerimientoId)->get();//solo notas de tematicas que tenga el requerimiento del postulante
        return view('admin.conocimientoCalif.calificarPostulante', compact('user', 'tematicas', 'notas'));
    }
    public function calificarPostDoc(User $user)
    {
        return view('admin.conocimientoCalif.calificarPostDoc', compact('user'));
    }

    public function eliminarCalificacion(User $user)
    {
        $calificacion = Calificacion_conocimiento::where('user_id', $user->id);
        $calificacion->delete();
        return redirect(route('lista.postulantes'))->with([ 'message' => 'Nota eliminada exitosamente!', 'alert-type' => 'success' ]);;
    }

    public function registrarNotas(Request $request, User $user)
    {
        $calificacion = new Calificacion_conocimiento();
        $notas = $request->input('notas');
        $tam=count($notas);
        $suma=0;
        for($i=0;$i<$tam;$i++)
        {
            if($notas[$i] != -1)
            {
                $suma+=$notas[$i];
            }
        }
        $suma*=0.8;
        $calificacion->score=$suma;
        $calificacion->user_id=$user->id;
        $calificacion->save();
        return redirect(route('lista.postulantes'))->with([ 'message' => 'Nota registrada exitosamente!', 'alert-type' => 'success' ]);;
    }
    public function regNotasDocencia(Request $request, User $user)
    {
        $calificacion = new Calificacion_conocimiento();
        $notA = $request->input('notA');
        $notB = $request->input('notB');
        $porcA = ($request->input('porcentajeA'))/100;
        $porcB = ($request->input('porcentajeB'))/100;
        $total = ($notA*$porcA + $notB*$porcB)*0.8;
        $calificacion->score=$total;
        $calificacion->user_id=$user->id;
        $calificacion->save();
        return redirect(route('lista.postulantes'))->with([ 'message' => 'Nota registrada exitosamente!', 'alert-type' => 'success' ]);;
    }
}
