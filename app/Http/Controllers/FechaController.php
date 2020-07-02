<?php

namespace App\Http\Controllers;
use \App\Http\Requests\FechaRequest;
use \App\Fecha;
use Illuminate\Http\Request;

class FechaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fechas=Fecha::all();
        return view('admin.fechas.index', compact('fechas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fechas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FechaRequest $request)
    {
        $fecha=Fecha::create($request->all());
        $fecha->save();
        return redirect(route('fechas.index'))->with(['message'=>'fecha creada exitosamente¡','alert-type'=>'success']);
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
    public function edit(Fecha $fecha)
    {
        return view('admin.fechas.edit',compact('fecha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FechaRequest $request, Fecha $fecha)
    {
        $fecha->fill($request->all());
        $fecha->save();
        return redirect(route('fechas.index'))->with([ 'message' => 'Fecha  actualizada exitosamente!', 'alert-type' => 'success' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Fecha::destroy($id);
        return redirect(route('fechas.index'))->with([ 'message' => 'Fecha  eliminada!', 'alert-type' => 'success' ]);
    }
}
