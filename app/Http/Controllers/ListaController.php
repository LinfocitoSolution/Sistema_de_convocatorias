<?php

namespace App\Http\Controllers;
use\App\Lista;
use App\Requerimiento;
use App\User;
use App\Curriculum;
use App\Habilitado;

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
      
    public function indexlab(User $user)
    {
        return view('admin.habilitado_inhabilitado.documentosPresentar', compact('user'));
      
    }
    public function indexdoce(User $user)
    {
        return view('admin.habilitado_inhabilitado.documentosPresentar_doc',compact('user'));
    }
    public function habilitar(User $user, Request $request)
    {
       
      
        
        $user->habilitados->first()->name=$request->input('hab');
        $user->habilitados->first()->description=$request->input('descripcion');
        $user->save();
        $user->push();
        //return $request->input('hab');
        return redirect(route('habilitado_inhabilitado.index'))->with([ 'message' => 'Usuario habilitado/inhabilitado exitosamente!', 'alert-type' => 'success' ]);
    }
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

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
        
    }
    public function describe(){
        return view('admin.habilitado_inhabilitado.descripcion');
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
    public function indexdoc(){
        return view('admin.habilotado_inhabilitado.documentosPresentar_doc');

    }
}
