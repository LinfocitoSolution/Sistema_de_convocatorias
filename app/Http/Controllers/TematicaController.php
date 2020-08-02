<?php

namespace App\Http\Controllers;
use App\Tematica;
use Illuminate\Http\Request;
use App\Unidad;
use App\User;
use App\Habilitado;
use App\Convocatoria;
use App\Requerimiento;
use App\Curriculum;
use App\Carrera;

class TematicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $callsLab = Convocatoria::where('tipo_convocatoria', 'convocatoria de laboratorios')->get();
        $tematicas = Tematica::all();
        if($tematicas->isEmpty())
        {
            return redirect(route('tematica.unidad'))->with(['messageDanger'=>'Registre sus temáticas','alert-type'=>'danger']);
        }
        if($callsLab->isEmpty())
        {
            return redirect(route('tematica.unidad'))->with(['messageDanger'=>'Necesita crear una convocatoria (laboratorio)!','alert-type'=>'danger']);
        }

        return view('admin.tematica.index',compact('callsLab', 'tematicas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tematicaUnidad()
    {
        $unidad=Unidad::all();
        return view('admin.tematica.unidad',compact('unidad'));
    }
    public function tematicaConvocatoria(Request $request)
    {
        $uni = $request->input('unidad');
        $convocatoria =Convocatoria::where('unit_id','=', $uni)->whereYear('gestion', '=', '2020')->get();
        return view('admin.tematica.convocatoria',compact('convocatoria', 'uni'));
    }
    public function create(Request $request)
    {
        $callid = $request->get('convoca');
        $call = Convocatoria::find($callid);
        return view('admin.tematica.create',compact('call'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Convocatoria $call)
    {
        $names = $request->input('campo');
        $tam = count($names);
        $requerimientos = $call->requerimientos()->get();
        for($i=0;$i<$tam;$i++)
        {
            $tematica = new Tematica();
            $tematica->name = $names[$i];
            $tematica->save();
            $tematica->requerimientos()->attach($requerimientos);
        }
        return redirect(route('tematica.index'))->with(['message'=>'Tabla creada exitosamente!','alert-type'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Convocatoria $call)
    {
        $tematicas=Tematica::all();
        return view('admin.tematica.show',compact('call','tematicas'));
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
    public function destroy(Convocatoria $call)
    { 
        $requerimientos = $call->requerimientos()->get();
        $tematicas = Tematica::all();
        if($call->publicado == 'no')
        {
            foreach($tematicas as $t)
            {
                foreach($requerimientos as $r)    
                {
                    if($t->requerimientos()->first()->id == $r->id)
                    {
                        $t->requerimientos()->delete();
                        $t->delete();
                        $r->tematicas()->detach();
                    }
                }
            }
            return redirect(route('tematica.index'))->with(['message'=>'Tematicas eliminadas con éxito!','alert-type'=>'success']);
        }
        //ROJO
        return redirect(route('tematica.index'))->with(['messageDanger'=>'No puede eliminar una temática si la convocatoria está publicada!','alert-type'=>'danger']);
    }
}
