<?php

namespace App\Http\Controllers;
use \App\ConocimientoCalif;
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
        //$conocimientoCalif=ConocimientoCalif::all();
        $conocimientoCalif=array(1,2,3);
        return view('admin.conocimientoCalif.index', compact('conocimientoCalif'));
    }
    public function primerPaso()
    {   
        $unidad=Unidad::all();
        return view('admin.conocimientoCalif.form_primerpaso',compact('unidad'));
    }
    public function segundoPaso(Request $request)
    {
        $uni = $request->input('unidad');
        $convocatoria =Convocatoria::all();
        return view('admin.conocimientoCalif.form_segundopaso', compact('convocatoria', 'uni'));
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
        $requerimientosLab = Requerimiento::where('tipo_requerimiento', 'requerimiento de laboratorio')->get();
        $requerimientosDoc = Requerimiento::where('tipo_requerimiento', 'requerimiento de docencia')->get();
        return view('admin.conocimientoCalif.create',compact('call', 'requerimientosLab', 'requerimientosDoc', 'tematicas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notas = $request->input('nota');
        $requerimientosLab = Requerimiento::where('tipo_requerimiento', 'requerimiento de laboratorio')->get();
        $tematicas = Tematica::all();
        $aux = 0;
        foreach($tematicas as $tm)
        {
            foreach($requerimientosLab as $r)
            {
                if($notas[$aux]!=0)
                {
                    $tabla = new Tematica_requerimiento();
                    $tabla->requerimiento_id = $r->id;
                    $tabla->tematica_id = $tm->id;
                    $tabla->score = $notas[$aux];
                    $tabla->save();
                }
                $aux++;
            }
        }
        return redirect(route('conocimientoCalif.index'))->with(['message'=>'Tabla creada exitosamente¡','alert-type'=>'success']);
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
        $conocimientoCalif->fill($request->all());
        $conocimientoCalif->save();
        return redirect(route('conocimientoCalif.index'))->with([ 'message' => 'Tabla  actualizada exitosamente!', 'alert-type' => 'success' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConocimientoCalif $tabla)
    {
        $tabla->delete();
        // Tematica_requerimiento::destroy($id);
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
        return view('admin.conocimientoCalif.calificarPostulante', compact('user', 'tematicas'));
    }
    public function calificarPostDoc(User $user)
    {
        $tematicas = Tematica::all();
        return view('admin.conocimientoCalif.calificarPostDoc', compact('user', 'tematicas'));
    }

    public function registrarNotas(Request $request)
    {
        //es como un store de las notas del postulante
    }
}
