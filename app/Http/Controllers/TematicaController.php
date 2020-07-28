<?php

namespace App\Http\Controllers;
use \App\Tematica;
use Illuminate\Http\Request;
use App\Unidad;
use App\User;
use App\Habilitado;
use App\Convocatoria;
use App\Requerimiento;
use App\Curriculum;
use App\Carrera;

class TematicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tematica=array(1,2,3);
        return view('admin.tematica.index', compact('tematica'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tematicaUnidad()
    {
        $unidad=Unidad::all();
        return view('admin.tematica.unidad',compact('unidad'));
    }
    public function tematicaConvocatoria(Request $request)
    {
        $uni = $request->input('unidad');
        $convocatoria =Convocatoria::all();
        return view('admin.tematica.convocatoria', compact('convocatoria', 'uni'));
    }
    public function create()
    {
        return view('admin.tematica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tematica=Tematica::create($request->all());
        $tematica->save();
        return redirect(route('tematica.index'))->with(['message'=>'tabla creada exitosamente¡','alert-type'=>'success']);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
