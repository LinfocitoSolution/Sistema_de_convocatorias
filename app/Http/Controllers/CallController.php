<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convocatoria;
use App\Unidad;
use App\Requerimiento;
use App\fecha;
use DB;
use Validator;

class CallController extends Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this-> middleware('permission:create announcements')->only(['create','store']);
        $this-> middleware('permission:list announcements')->only('index');
        $this-> middleware('permission:edit announcements')->only(['edit','update']);
        // $this-> middleware('permission:list announcements')->only('show');//show        
        $this-> middleware('permission:delete announcements')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calls = Convocatoria::all();
       
       /* $unidades = Unidad::all();
        $requerimientos = Requerimiento::all();*/
        //return view('admin.announcements.index', compact('calls', 'unidades', 'requerimientos'));
        return view('admin.announcements.index', compact('calls'));
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
        $requerimientos=Requerimiento::all();
        $requerimiento = DB::table('requerimientos')->get();
        $eventos = fecha::all();
        return view('admin.announcements.create', compact('calls', 'unidades', 'requerimientos', 'eventos'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //$requerimiento = DB::table('requerimientos')->get();
        $convocatoria = new Convocatoria();
        $convocatoria->titulo_convocatoria=$request->input('titulo');
        $convocatoria->unit_id=$request->get('unidad');
        $convocatoria->descripcion=$request->input('descripcion');
        $convocatoria->requisitos=$request->input('requisito');
        $convocatoria->documentos_a_presentar=$request->input('docsapresentar');
        $convocatoria->gestion=$request->input('gestion');
        // if ($request->hasFile('archivo')) {
        //     $file = $request->file('archivo');
        //     $nombre = time().$file->getClientOriginalName();
        //     //Se almacena en: C:\laragon\www\[nombreProyecto]\public\convocatorias
        //     $file->move(public_path().'/convocatorias/', $nombre);
        //     $convocatoria->pdf_file=$nombre;
        // } 
        $convocatoria->save();
        $unidad = $request->input('unidad');
        $requerimientos = $request->input('requerimientos');
        $convocatoria->requerimientos()->attach($requerimientos);
        $eventos = $request->input('eventos');
        $convocatoria->fechas()->attach($eventos);
        return redirect('administrador');  
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
        return view('admin.announcements.edit',compact('call', 'unidades', 'requerimientos','eventos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Convocatoria $call)
    {
        $call->titulo_convocatoria=$request->get('titulo'); 
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
    public function destroy(Convocatoria $call)
    {
        $file_path = public_path().'/convocatorias/'.$call->pdf_file;
        \File::delete($file_path);
        $call->delete();
        // Session::flash('flash_message3', 'Convocatoria  '.$call->id.' eliminada!');
        return redirect(route('call.index'));
    }
}
