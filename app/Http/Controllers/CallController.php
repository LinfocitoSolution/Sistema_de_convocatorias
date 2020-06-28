<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convocatoria;
use App\Area;
use App\Unidad;
use App\Requerimiento;
use Validator;

class CallController extends Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this-> middleware('permission:create announcements')->only(['create','store']);
        $this-> middleware('permission:list announcements')->only('index');
        $this-> middleware('permission:edit announcements')->only(['edit','update']);
        // $this-> middleware('permission:list announcements')->only('show');//show        
        $this-> middleware('permission:delete announcements')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calls = Convocatoria::all();
        $areas = Area::all();
        $unidades = Unidad::all();
        $requerimientos = Requerimiento::all();
        return view('admin.announcements.index', compact('calls', 'areas', 'unidades', 'requerimientos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $calls = Convocatoria::all();
        $areas = Area::all();
        $unidades = Unidad::all();
        $requerimientos = Requerimiento::all();
        return view('admin.announcements.create', compact('calls', 'areas', 'unidades', 'requerimientos'));
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
    public function update(Request $request, Convocatoria $call)
    {
         $call->fill($request->all());
        // if ($request->hasFile('archivo')) {
        //     $file = $request->file('archivo');
        //     $nombre = time().$file->getClientOriginalName();
        //     $call->pdf_file=$nombre;
        //     $file->move(public_path().'/convocatorias/', $nombre);
        //     $convocatoria->pdf_file=$nombre;
        //     $convocatoria->save();
        //     return redirect('administrador');
        // } 
        // else {
        //     return redirect('administrador')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }
        $call->save();
        return redirect(route('call.index'))->with([ 'message' => 'Convocatoria actualizada exitosamente!', 'alert-type' => 'success' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convocatoria $call)
    {
        $file_path = public_path().'/convocatorias/'.$call->pdf_file;
        \File::delete($file_path);
        $call->delete();
        // Session::flash('flash_message3', 'Convocatoria  '.$call->id.' eliminada!');
        return redirect(route('call.index'));
    }
}
