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
use App\Calificacion_merito;
use App\Postulante_submerito;
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
        if($tematicas->isEmpty())
        {   //ROJO
            return redirect(route('tematica.unidad'))->with(['messageDanger'=>'No tiene temáticas registradas!','alert-type'=>'danger']);
        }
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
    
        if($call != '')
        {
            $tematicas = Tematica::all();
            $requerimientosLab = $call->requerimientos()->get();
            
            return view('admin.conocimientoCalif.create',compact('call', 'requerimientosLab', 'tematicas'));
        }
        return redirect(route('conocimientoCalif.index'))->with(['messageDanger'=>'No tiene convocatorias disponibles para esa unidad!','alert-type'=>'danger']);
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
        $sizeOfReq = count($requerimientosLab);
        $arrayNotas = array();
        $arrayNotas = array_pad($arrayNotas, $sizeOfReq, 0);
        $indNotas = 0;
        //COMPROBACIÓN SI LAS NOTAS DE REQUERIMIENTOS SUMAN 100
        foreach($tematicas as $t)
        {
            $ind = 0;
            foreach($requerimientosLab as $re)
            {
                if($t->requerimientos->first()->id == $re->id)
                {
                    $arrayNotas[$ind]+=$notas[$indNotas];
                    $indNotas++;
                    $ind++;
                }
            }
        }
        for($i = 0; $i<$sizeOfReq;$i++)
        {
            if($arrayNotas[$i] != 100 )
            {
                return redirect(route('conocimientoCalif.index'))->with(['messageDanger'=>'La tabla no se registró debido a que la suma de puntos por requerimiento deben ser 100!','alert-type'=>'danger']);
            }
        }
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
        $call = Convocatoria::find($item);
        if($call->publicado == 'no')
        {
            foreach($tabla as $tb)
            {
                $tb->delete();
            }
            return redirect(route('conocimientoCalif.index'))->with([ 'message' => 'Tabla  eliminada!', 'alert-type' => 'success' ]);
        }
        //ROJO
        return redirect(route('conocimientoCalif.index'))->with([ 'messageDanger' => 'No puede eliminar la tabla si la convocatoria está publicada!', 'alert-type' => 'danger' ]);
    }
    public function listarPostulantes()
    {
        if(request()->has("carrera"))
        {
            $postulantes = User::where('carrera_id', '=', request('carrera'))->get();
        }
        else 
        {
            $postulantes = User::where('carrera_id', '!=', 'null')->get();
        }
        $carreras=Carrera::all();
        $calf=Calificacion_conocimiento::all();
        return view('admin.conocimientoCalif.listaPostulantes', compact('postulantes','calf','carreras'));
    }

    public function calificarPostulant(User $user)
    {
        $tematicas = Tematica::all();
        $requerimientoId = $user->requerimientos->first()->id;//requerimiento al que se postula
        $notas = Tematica_requerimiento::where('requerimiento_id', '=', $requerimientoId)->get();//solo notas de tematicas que tenga el requerimiento del postulante
        
        if($notas->isEmpty())
        {
            return redirect(route('calif.index'))->with([ 'messageDanger' => 'Aún no se han registrado las tablas del requerimiento al que se postula!', 'alert-type' => 'danger' ]);
        }
        if(Postulante_submerito::where('user_id','=',$user->id)->exists())
        {
            return view('admin.conocimientoCalif.calificarPostulante', compact('user', 'tematicas', 'notas'));
        }
        return redirect(route('calif.index'))->with([ 'messageDanger' => 'Previamente registre sus notas de méritos!', 'alert-type' => 'danger' ]);
        
    }
    public function calificarPostDoc(User $user)
    {
        if(Postulante_submerito::where('user_id','=',$user->id)->exists())
        {
            return view('admin.conocimientoCalif.calificarPostDoc', compact('user'));
        }
        return redirect(route('calif.index'))->with([ 'messageDanger' => 'Previamente registre sus notas de méritos!', 'alert-type' => 'danger' ]);
    }

    public function eliminarCalificacion(User $user)
    {
        $calificacion = Calificacion_conocimiento::where('user_id', $user->id)->first();
        if($calificacion->publicado == 'no')
        {
            $calificacion->delete();
            return redirect(route('lista.postulantes'))->with([ 'message' => 'Nota eliminada exitosamente!', 'alert-type' => 'success' ]);
        }
        //ROJO
        return redirect(route('lista.postulantes'))->with([ 'messageDanger' => 'No puede eliminar la nota si ya está publicada!', 'alert-type' => 'danger' ]);
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
        $calificacion->publicado="no";
        $calificacion->save();
        return redirect(route('lista.postulantes'))->with([ 'message' => 'Nota registrada exitosamente!', 'alert-type' => 'success' ]);;
    }
    public function regNotasDocencia(Request $request, User $user)
    {
        $calificacion = new Calificacion_conocimiento();
        $porA = $request->input('porcentajeA');
        $porB = $request->input('porcentajeB');
        if($porA+$porB != 100)
        {
            return redirect(route('lista.postulantes'))->with([ 'messageDanger' => 'Los suma de los porcentajes no debe exceder el 100%!', 'alert-type' => 'danger' ]);
        }
        $notA = $request->input('notA');
        $notB = $request->input('notB');
        $porcA = ($request->input('porcentajeA'))/100;
        $porcB = ($request->input('porcentajeB'))/100;
        $total = ($notA*$porcA + $notB*$porcB)*0.8;
        $calificacion->score=$total;
        $calificacion->user_id=$user->id;
        $calificacion->publicado="no";
        $calificacion->save();
        return redirect(route('lista.postulantes'))->with([ 'message' => 'Nota registrada exitosamente!', 'alert-type' => 'success' ]);;
    }
    public function publicar(User $user)
    {
        $postulante=Calificacion_conocimiento::where('user_id',$user->id)->first();
        $postulante->publicado="si";
        //return $postulante;
        $postulante->save();
        return redirect(route('lista.postulantes'))->with([ 'message' => 'Nota publicada exitosamente!', 'alert-type' => 'success' ]);
    }
    public function quitarPublicacion(User $user)
    {
        $postulante=Calificacion_conocimiento::where('user_id',$user->id)->first();
        $postulante->publicado="no";
        //return $user;
        $postulante->save();
        return redirect(route('lista.postulantes'))->with([ 'message' => 'Nota quitada exitosamente!', 'alert-type' => 'success' ]);
    }
    public function tablaNotasFinales()
    {   
        $postulantes = User::where('carrera_id', '!=', 'null')->get();
        $notasConocimiento = Calificacion_conocimiento::all();
        $notasMerito = Postulante_submerito::all();
        $unidades = Unidad::all();
        if(request()->has("unidad"))
        {
            $convocatorias=Convocatoria::where('unit_id', '=', request('unidad'))->where('publicado', '=', 'si')->get();
            $unidad = Unidad::where('id', '=', request('unidad'))->first();
            return view('admin.notaFinal.index', compact('postulantes', 'notasMerito', 'notasConocimiento', 'unidades', 'convocatorias', 'unidad'));
        }
        return view('admin.notaFinal.index', compact('postulantes', 'notasMerito', 'notasConocimiento', 'unidades'));
    }
}
