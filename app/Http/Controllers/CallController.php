<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convocatoria;
use App\Unidad;
use App\Requerimiento;
use App\Fecha;
use App\Merito;
use App\Submerito;
use App\User;
use App\Libro;
use App\Descripcion;
use App\Tematica;
use App\Tematica_requerimiento;
use DB;
use Validator;
use App\Http\Requests\ConvocatoriaRequest;
use Carbon\Carbon;

class CallController extends Controller
{
    /**
     * Class constructor.
     */
    // public function __construct()
    // {
    //     $this-> middleware('permission:create announcements_lab')->only(['create','store']);
    //     $this-> middleware('permission:list announcements')->only('index');
    //     $this-> middleware('permission:edit announcements')->only(['edit','update']);
    //     // $this-> middleware('permission:list announcements')->only('show');//show        
    //     $this-> middleware('permission:delete announcements')->only('destroy');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actual = Carbon::now();
        $calls = Convocatoria::all();
        $gestiones = array();
        $gestiones = array_pad($gestiones, count($calls), 0);
        $i=0;
        foreach($calls as $c)
        {
            $gestiones[$i] = substr($c->gestion,0,-6);
            $i++;
        }
        $gestiones = array_unique($gestiones);
        if(request()->has("gestion"))
        {
            $calls = Convocatoria::whereYear('gestion', '=',request('gestion'))->get();
            return view('admin.announcements.index', compact('calls', 'gestiones'));
        }
        return view('admin.announcements.index', compact('calls', 'gestiones'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calls = Convocatoria::all();
        $unidades = Unidad::all();
        $requerimientos=Requerimiento::where('tipo_requerimiento', '=', 'requerimiento de laboratorio')->get();
        
        $eventos = fecha::all();
        foreach($requerimientos as $item)
        {
            if(!$item->convocatorias()->exists())
            {
                return view('admin.announcements.create', compact('calls', 'unidades', 'requerimientos', 'eventos'));
            }
        }
        return redirect(route('requerimientos.create'))->with([ 'messageDanger' => 'No tiene requerimientos disponibles!', 'alert-type' => 'danger' ]);  

    }
    public function createdoc()
    {
        $calls = Convocatoria::all();
        $unidades = Unidad::all();
        $requerimientos=Requerimiento::where('tipo_requerimiento', '=', 'requerimiento de docencia')->get();
        $eventos = fecha::all();
        foreach($requerimientos as $item)
        {
            if(!$item->convocatorias()->exists())
            {
                return view('admin.announcements.createdoc', compact('calls', 'unidades', 'requerimientos', 'eventos'));
            }
        }
        return redirect(route('requerimientos.create'))->with([ 'messageDanger' => 'No tiene requerimientos disponibles!', 'alert-type' => 'danger' ]);  
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConvocatoriaRequest $request)
    {
        $convocatoria = new Convocatoria();
        $convocatoria->tipo_convocatoria='convocatoria de laboratorios';
        $convocatoria->titulo_convocatoria=$request->input('titulo');
        $convocatoria->unit_id=$request->get('unidad');
        $convocatoria->requisitos=$request->input('requisito');
        $convocatoria->gestion=$request->input('gestion');
        $convocatoria->publicado="no";
        // if ($request->hasFile('archivo')) {
        //     $file = $request->file('archivo');
        //     $nombre = time().$file->getClientOriginalName();
        //     //Se almacena en: C:\laragon\www\[nombreProyecto]\public\convocatorias
        //     $file->move(public_path().'/convocatorias/', $nombre);
        //     $convocatoria->pdf_file=$nombre;
        // } 
        $convocatoria->save();
        $unidad = $request->input('unidad');
        $requerimientos=$request->input('requerimientos');
        
        $evento = $request->input('evento');

        $convocatoria->requerimientos()->attach($requerimientos);
        $eventos = $request->input('eventos');
        $convocatoria->fechas()->attach($eventos);
        return redirect(route('call.index'))->with([ 'message' => 'Convocatoria de Laboratorios creada exitosamente!', 'alert-type' => 'success' ]);  
        
    }
    public function storedoc(ConvocatoriaRequest $request)
    {
        $convocatoria = new Convocatoria();
        $convocatoria->tipo_convocatoria='convocatoria de docencia';
        $convocatoria->titulo_convocatoria=$request->input('titulo');
        $convocatoria->unit_id=$request->get('unidad');
        $convocatoria->requisitos=$request->input('requisito');
        $convocatoria->gestion=$request->input('gestion');
        $convocatoria->publicado="no";

        $convocatoria->save();
        $unidad = $request->input('unidad');
        $requerimientos=$request->input('requerimientos');
        $evento = $request->input('evento');
        $convocatoria->requerimientos()->attach($requerimientos);
        $eventos = $request->input('eventos');
        $convocatoria->fechas()->attach($eventos);
        return redirect(route('call.index'))->with([ 'message' => 'Convocatoria de Docencia creada exitosamente!', 'alert-type' => 'success' ]);  
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($file_name)
    {   
        $file_path = public_path('convocatorias/'.$file_name);
        return response()->file($file_path);
    }
    public function generarConvocatoriaLabo(Convocatoria $call)
    {   
        $meritos=Merito::where('convocatoria_id', $call->id)->get();
        $submeritos=Submerito::all();
        $descripciones=Descripcion::all();

        $tematicas = Tematica::all();
        // $requerimientoId = $call->requerimientos->get();
        $notas = Tematica_requerimiento::where('convocatoria_id', '=', $call->id)->get(); 
        return view('admin.announcements.plantilla.generar_convocatoria', compact('call', 'descripciones', 'meritos', 'submeritos', 'notas', 'tematicas'));
    }

    public function generarConvocatoriaDocencia(Convocatoria $call)
    {   
        $meritos=Merito::where('convocatoria_id', $call->id)->get();
        $submeritos=Submerito::all();
        $descripciones=Descripcion::all();

        return view('admin.announcements.plantilla.generar_convocatoriaDoc', compact('call','descripciones', 'meritos', 'submeritos'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Convocatoria $call)
    {
        // $unidades = Unidad::all();
        $requerimientos=Requerimiento::all();
        $requerimiento = DB::table('requerimientos')->get();
        $eventos = DB::table('fechas')->get();
        $unidades = DB::table('units')->get();
       
        $call->save();
        return view('admin.announcements.edit',compact('call', 'unidades', 'requerimientos','eventos'));
       /* @else
        return view('admin.annoucements,edit1',compact('call','unidades', 'requerimientos','eventos'));*/
         
    }
    public function editardoc(Convocatoria $call)
    {
        $requerimientos=Requerimiento::all();
        $requerimiento = DB::table('requerimientos')->get();
        $eventos = DB::table('fechas')->get();
        $unidades = DB::table('units')->get();
        
        $call->save();
        return view('admin.announcements.editdoc',compact('call', 'unidades', 'requerimientos','eventos'));
    }
    public function generarConvocatoriaDoc(Convocatoria $call){
        return view('admin.announcements.plantilla.generar_convocatoriaDoc',compact('call'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatedoc(ConvocatoriaRequest $request, Convocatoria $call)
    {
        $call->titulo_convocatoria=$request->get('titulo'); 
        $call->tipo_convocatoria='convocatoria de docencia';
        $call->unit_id=$request->get('unidad');
        $call->update($request->all());
       
        $call->save();
        
        $requerimientos=$request->input('requerimientos');
        
        $evento = $request->input('evento');

        $call->requerimientos()->sync($requerimientos);
        $eventos = $request->input('eventos');
        $call->fechas()->sync($eventos);
        
        return redirect(route('call.index'))->with([ 'message' => 'Convocatoria actualizada exitosamente!', 'alert-type' => 'success' ]);
    }
    public function update(ConvocatoriaRequest $request, Convocatoria $call)
    {
        $call->titulo_convocatoria=$request->get('titulo'); 
        $call->tipo_convocatoria='convocatoria de laboratorios';
        $call->unit_id=$request->get('unidad');
        $call->update($request->all());
        // if ($request->hasFile('archivo')) {
        //     $file = $request->file('archivo');
        //     $nombre = time().$file->getClientOriginalName();
        //     $call->pdf_file=$nombre;
        //     $file->move(public_path().'/convocatorias/', $nombre);
        //     $convocatoria->pdf_file=$nombre;
        //     $convocatoria->save();
        //     return redirect('administrador');
        // } 
        // else {
        //     return redirect('administrador')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        $call->save();
        
        $requerimientos=$request->input('requerimientos');
        
        $evento = $request->input('evento');

        $call->requerimientos()->sync($requerimientos);
        $eventos = $request->input('eventos');
        $call->fechas()->sync($eventos);
        /*$requerimientos=$request->input('requerimiento');
        $call->requerimientos()->attach($requerimientos);*/
        return redirect(route('call.index'))->with([ 'message' => 'Convocatoria actualizada exitosamente!', 'alert-type' => 'success' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function publicarConvocatoria(Convocatoria $call)
    {
        $call->publicado="si";
        $call->save();
        return redirect(route('call.index'))->with([ 'message' => 'Convocatoria publicada exitosamente!', 'alert-type' => 'success' ]);
    }
    public function quitarPublicacion(Convocatoria $call)
    {
        $call->publicado="no";
        $call->save();
        return redirect(route('call.index'))->with([ 'message' => 'Publicacion quitada exitosamente!', 'alert-type' => 'success' ]);
    }
     public function destroy(Convocatoria $call)
    {
        $file_path = public_path().'/convocatorias/'.$call->pdf_file;
        \File::delete($file_path);
        $call->delete();
        // Session::flash('flash_message3', 'Convocatoria  '.$call->id.' eliminada!');
        return redirect(route('call.index'));
    }
}
