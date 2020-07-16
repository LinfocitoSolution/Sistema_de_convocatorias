<?php

namespace App\Http\Controllers;
use\App\Lista;
use App\Requerimiento;
use App\User;
use App\Curriculum;
use App\Habilitado;
use App\Unidad;
use App\Convocatoria;
use DB;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $habilitados=Habilitado::all();
        $requerimientos=Requerimiento::all();
        $users=User::all();
        $curriculums=Curriculum::all();
        return view('admin.habilitado_inhabilitado.index' ,compact('requerimientos','users','curriculums','habilitados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function primerPaso()
    {   
        $unidad=Unidad::all();
        return view('admin.habilitado_inhabilitado.primer_paso',compact('unidad'));
    }
    public function segundoPaso(Request $request)
    {
        $uni = $request->input('unidad');
        $convocatoria =Convocatoria::all();
        return view('admin.habilitado_inhabilitado.segundo_paso', compact('convocatoria', 'uni'));
    }
}
