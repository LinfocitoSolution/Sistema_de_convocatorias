<?php

namespace App\Http\Controllers;

use \App\Http\Requests\RequerimientoRequest;
use \App\Requerimiento;
use Illuminate\Http\Request;

class RequerimientosController extends Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this-> middleware('permission:create requirements')->only(['create','store']);
        $this-> middleware('permission:list requirements')->only('index');
        $this-> middleware('permission:edit requirements')->only(['edit','update']);
        // $this-> middleware('permission:list requirements')->only('show');//show        
        $this-> middleware('permission:delete requirements')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requerimientos=Requerimiento::all();
        return view('admin.requirements.index', compact('requerimientos'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.requirements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequerimientoRequest $request)
    {
        $requerimiento=Requerimiento::create($request->all());
        $requerimiento->save();
        return redirect(route('requerimientos.index'))->with([ 'message' => 'Requerimiento creado exitosamente!', 'alert-type' => 'success' ]);
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
    public function edit(Requerimiento $requerimiento)
    {
        return view('admin.requirements.edit',compact('requerimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequerimientoRequest $request, Requerimiento $requerimiento)
    {
        $requerimiento->fill($request->all());
        $requerimiento->save();
        return redirect(route('requerimientos.index'))->with([ 'message' => 'Requerimiento  actualizado exitosamente!', 'alert-type' => 'success' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Requerimiento::destroy($id);    
        return redirect(route('requerimientos.index'))->with([ 'message' => 'Requerimiento  eliminado!', 'alert-type' => 'success' ]);
    }
}
