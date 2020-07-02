<?php

namespace App\Http\Controllers;
use \App\ConocimientoCalif;
use Illuminate\Http\Request;

class ConocimientoCalifController extends Controller
{
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.conocimientoCalif.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conocimientoCalif=ConocimientoCalif::create($request->all());
        $conocimientoCalif->save();
        return redirect(route('conocimientoCalif.index'))->with(['message'=>'tabla creada exitosamente¡','alert-type'=>'success']);
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
    public function destroy($id)
    {
        ConocimientoCalif::destroy($id);
        return redirect(route('conocimientoCalif.index'))->with([ 'message' => 'Tabla  eliminada!', 'alert-type' => 'success' ]);
    }
}
