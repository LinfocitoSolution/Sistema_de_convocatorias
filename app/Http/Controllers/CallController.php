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
        $convocatorias = Convocatoria::all();
        return view('admin.announcements.index', compact('convocatorias'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.announcements.create');
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
            return redirect('administrador');
        } else {
            return redirect('administrador')
                        ->withErrors($validator)
                        ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($file_name)
    {
        $file_path = public_path('convocatorias/'.$file_name);
        return response()->file($file_path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Convocatoria $call)
    {
        return view('admin.announcements.edit',compact('call'));
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
        Convocatoria::destroy($id);
        Session::flash('flash_message3', 'Convocatoria  '.$id.' eliminada!');
        return redirect(route('call.index'))->with([ 'message' => 'Usuario eliminado exitosamente!', 'alert-type' => 'info' ]);
    }
}
