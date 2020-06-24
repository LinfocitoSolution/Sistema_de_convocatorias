<?php

namespace App\Http\Controllers;
use \App\Unidad;
use Illuminate\Http\Request;
use App\Http\Requests\UnidadRequest;

class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidad=Unidad::all();
        return view('admin.unidades.index',compact('unidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.unidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnidadRequest $request)
    {
        $unidad=Unidad::create($request->all());
        $unidad->save();
        return redirect(route('unidades.index'))->with([ 'message' => 'Unidad Academica creada exitosamente!', 'alert-type' => 'success' ]);
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
        $unidad= Unidad::where('id',$id)
            ->first();
        return view('admin.unidades.edit',compact('unidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UnidadRequest $request, $id)
    {
        $unidad  = Unidad::where('id',$id)
        ->first();
        $unidad->name=$request->get('name');
        $unidad->description=$request->get('description');
        $unidad->save();
        return redirect(route('unidades.index'))->with([ 'message' => 'Unidad Academica actualizada exitosamente!', 'alert-type' => 'success' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Unidad::destroy($id);    
        return redirect(route('unidades.index'))->with([ 'message' => 'Unidad Academica eliminada!', 'alert-type' => 'success' ]);
    }
}
