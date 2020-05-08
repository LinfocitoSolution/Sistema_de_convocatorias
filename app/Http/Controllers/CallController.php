<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convocatoria;
use Validator;

class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Hello there';
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
        $validator = Validator::make($request->all(), [
            'titulo' => 'required | max: 50',
            'archivo' => 'required | max:5000 | file | mimes:pdf',  
            'descripcion' => 'required | max:200'
        ]);

       if ($validator->fails()) {
            return redirect('call/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $convocatoria = new Convocatoria();
        $convocatoria->titulo_convocatoria=$request->input('titulo');
        $convocatoria->descripcion=$request->input('descripcion');

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
  
    }

    public function mostrar()
    {
        $convocatorias = Convocatoria::all();
        return view('index', compact('convocatorias'));
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