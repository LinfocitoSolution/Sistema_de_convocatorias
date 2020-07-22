<?php

namespace App\Http\Controllers;
use \App\Merito;
use \App\Submerito;
use \App\Convocatoria;
use App\Http\Requests\MeritoRequest;

use Illuminate\Http\Request;

class MeritosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calls=Convocatoria::all();
        $meritos=Merito::orderBy('convocatoria_id', 'asc')->get();
        return view('admin.meritos.index', compact('calls','meritos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calls=Convocatoria::all();
        $meritos=Merito::all();
        return view('admin.meritos.create', compact('calls','meritos'));
    }
    public function createsubmerito(Merito $merito)
    {
        $calls=Convocatoria::all();
        $meritos=Merito::all();
        $meri=Merito::Find($merito->first()->id);
       return view('admin.meritos.createsub', compact('calls','meritos','meri'));
        //return $meri;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MeritoRequest $request)
    {
        
        $meritos=new Merito;
        $meritos->name=$request->input('name');
        $meritos->score=$request->input('score');
        $meritos->convocatoria_id=$request->get('convocatoria');
        $meritos->save();
    
        return redirect(route('merito.index'))->with([ 'message' => 'Mérito creado exitosamente!', 'alert-type' => 'success' ]);
    }
    public function submeritostore(Request $request,Merito $meri)
    {
        
        $submeritos=new Submerito;
        $submeritos->name=$request->input('name');
        $submeritos->score=$request->input('score');
        $submeritos->description=$request->input('description');
        $merid=Merito::Find($meri->first()->id)->id;
        $submeritos->merito_id=$merid;
       
        $submeritos->save();
        
        return redirect(route('merito.index'))->with([ 'message' => 'submerito creado exitosamente!', 'alert-type' => 'success' ]);
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Merito::destroy($id);  

        return redirect(route('merito.index'))->with([ 'message' => 'Mérito   eliminado!', 'alert-type' => 'success' ]);
    }
    public function submerito()
    {
        return view('admin.meritos.formsubmerito');
    }
}