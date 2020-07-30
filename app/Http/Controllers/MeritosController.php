<?php

namespace App\Http\Controllers;
use \App\Merito;
use \App\Submerito;
use \App\Unidad;
use \App\Convocatoria;
use \App\Descripcion;
use Validator;
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
    public function create(Request $request)
    {
        $uni = $request->input('unidad');
        
        $calls=Convocatoria::all();
        $meritos=Merito::all();
        
        return view('admin.meritos.create', compact('calls','meritos','uni'));
    }
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MeritoRequest $request)
    {
        
        $meritosa = Merito::where('convocatoria_id', '=',$request->input('convocatoria') )->get()->sum("score");
        $meritosa=100-$meritosa;
        //$meritosa=Merito::select("score " from  )->get();
        
        $meritos=new Merito;
        $meritos->name=$request->input('name');
        $meritos->score=$request->input('score');
        $meritos->convocatoria_id=$request->get('convocatoria');
        $messages=[
            
            'score.required'=>'se requiere el campo puntuacion para continuar',
            'score.numeric'=>'el campo puntuacion debe ser numerico',
            'score.digits_between'=>'el campo puntaje tiene que tener entre 1 y 3 digitos',
            'score.max'=>'el campo puntaje no debe pasar de los ' . $meritosa . ' puntos',
            'score.min'=>'el campo puntaje debe ser de al menos 1 punto para continuar',
        ];
        $validator = Validator::make($request->all(), [
            'score'=>'required|numeric|digits_between:1,3|max:' . $meritosa . '|min:1',
        ],$messages);
       
        
        
        if ($validator->fails()) {
            return redirect(route('merito.create'))->withErrors($validator);
        }
        else {
        $meritos->save();
       // return $meritosa;
        return redirect(route('merito.index'))->with([ 'message' => 'Mérito creado exitosamente!', 'alert-type' => 'success' ]);
        }
    }
    public function submeritostore(Request $request,Merito $merito)
    {
        
        $submeritos=new Submerito;
        $submeritos->name=$request->input('name');
        $submeritos->score=$request->input('score');
        $submeritos->description=$request->input('description');
        //$merid=Merito::Find($meri->first()->id)->id;
        $submeritos->merito_id=$merito->id;
       //return $merito;
       $submeritosa = ($merito->score)-(Submerito::where('merito_id', '=',$merito->id )->get()->sum("score"));
       $messages=[

        'name.required' => 'se requiere el campo nombre para continuar',
        'name.max'=>'el campo nombre no debe tener mas de 200 caracteres',
        'name.min'=>'el campo nombre tiene un minimo de 3 caracteres',
        'name.regex'=>'el campo nombre no acepta caracteres especiales', 
        'score.required'=>'se requiere el campo puntuacion para continuar',
        'score.numeric'=>'el campo puntuacion debe ser numerico',
        'score.digits_between'=>'el campo puntaje tiene que tener entre 1 y 3 digitos',
        'score.max'=>'el campo puntaje no debe pasar de los ' . $submeritosa . ' puntos',
        'score.min'=>'el campo puntaje debe ser de al menos 1 punto para continuar',
    ];
    $validator = Validator::make($request->all(), [
        'score'=>'required|numeric|digits_between:1,3|max:' . $submeritosa . '|min:1',
        'name'=>'required|max:200|min:3|regex:/^[\pL\s\-]+$/u',
    ],$messages);
   
    
    
    if ($validator->fails()) {
        //return Submerito::where('merito_id', '=',$merito->id )->get()->sum("score");
        return redirect(route('submerito.create',compact('merito')))->withErrors($validator);
    }
    else {
        
    

        $submeritos->save();
        
        return redirect(route('merito.index'))->with([ 'message' => 'submerito creado exitosamente!', 'alert-type' => 'success' ]);
        
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
    public function destroysub($id)
    {
        Submerito::destroy($id);  

        return redirect(route('merito.index'))->with([ 'message' => 'Submerito   eliminado!', 'alert-type' => 'success' ]);
    }
    public function submerito()
    {
        return view('admin.meritos.formsubmerito');
    }
    
    public function indexsubmerito(Merito $merito)
    {
        //$meri=Merito::Find($merito->first()->id);
        $submeritos=Submerito::all();
       return view('admin.meritos.indexsubmeritos',compact('submeritos','merito'));
        //return $merito;
    }
    public function createsubmerito(Merito $merito)
    {
        
        $calls=Convocatoria::all();
        $meritos=Merito::all();
        //$meri=Merito::Find($merito);
       return view('admin.meritos.createsub', compact('calls','meritos','merito'));
        //return $merito;
    }
    public function indexdescripcion(Submerito $submerito){
        $descripcion=Descripcion::all();
        return view('admin.meritos.index_descripcion',compact('descripcion','submerito'));
    }
    public function createdescripcion(Submerito $submerito){
        $submeritos=Submerito::all();
        $meritos=Merito::all();
        return view ('admin.meritos.create_descripcion',compact('submerito','submeritos','meritos'));
    }
    public function storedescripcion(Request $request,Submerito $submerito)
    {
        $descripcion=new Descripcion;
        $descripcion->descripcion=$request->input('descripcion');
        $descripcion->tipo_descripcion=$request->input('tipo');
        $descripcion->score=$request->input('score');
        
        
        $descripcion->submerito_id=$submerito->id;
       
       $descripcionsa = ($submerito->score);
       //return $descripcionsa;
       $messages=[

        'descripcion.required' => 'se requiere el campo nombre para continuar',
         
        'score.required'=>'se requiere el campo puntuacion para continuar',
        'score.numeric'=>'el campo puntuacion debe ser numerico',
        'score.digits_between'=>'el campo puntaje tiene que tener entre 1 y 3 digitos',
        'score.max'=>'el campo puntaje no debe pasar de los ' . $descripcionsa . ' puntos',
        'score.min'=>'el campo puntaje debe ser de al menos 1 punto para continuar',
    ];
    $validator = Validator::make($request->all(), [
        'score'=>'required|numeric|digits_between:1,3|max:' . $descripcionsa . '|min:0',
        'descripcion'=>'required',
    ],$messages);
   
    
    
    if ($validator->fails()) {
        //return Submerito::where('merito_id', '=',$merito->id )->get()->sum("score");
        return redirect(route('descripcion.create',compact('submerito')))->withErrors($validator);
    }
    else {
        
    

        $descripcion->save();
        
        return redirect(route('merito.index'))->with([ 'message' => 'descripcion creada exitosamente!', 'alert-type' => 'success' ]);
        
    } 
    }
    public function destroyDes($id)
    {
        Descripcion::destroy($id);  

        return redirect(route('merito.index'))->with([ 'message' => 'Descripcion   eliminado!', 'alert-type' => 'success' ]);
    }
    public function primerPaso()
    {   
        $unidad=Unidad::all();
        return view('admin.meritos.primer_paso',compact('unidad'));
    }
   
}