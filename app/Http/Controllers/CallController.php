<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convocatoria;

class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function docencia()
    {
        return view("calls.docencia");
    }
    
    
    public function noregister()
    {
        return view("calls.noregister");
    }
    public function index()
    {
        return 'Hello there';
    }
    public function formulariopost()
    {
        return view("calls.formulariopost");
    }
    public function convocatorias()
    {
        return view("calls.convocatorias");
    }
    public function calendario()
    {
        return view("layouts.calendario");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('calls.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $convocatoria = new Convocatoria();
        $convocatoria->titulo_convocatoria=$request->input('titulo');

        if ($request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $nombre = time().$file->getClientOriginalName();
            //Se almacena en: C:\laragon\www\[nombreProyecto]\public\convocatorias
            $file->move(public_path().'/convocatorias/', $nombre);
            $convocatoria->pdf_file=$nombre;
            $convocatoria->save();
            return 'Saved';
        } else {
            return 'Error';
        }
        
       

     
        //return $request->all();
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
    public function postulante(Request $request)
    {
        return view('users.postulante');
    }


    
    public function plantilla()
    {
        return view('layouts.plantilla');
    }

    
}
