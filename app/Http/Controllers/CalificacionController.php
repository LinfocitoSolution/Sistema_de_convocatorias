<?php

namespace App\Http\Controllers;
use App\Merito;
use App\Submerito;
use App\User;
use App\Libro;
use Validator;
use App\Postulante_submerito;
use App\Calificacion_merito;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calificacion=Postulante_submerito::all();
        $users=User::all();

        return view('admin.calificacion.index',compact('users','calificacion'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $users=User::where('id','=',$user->id);
        $meritos=Merito::all();
        $submeritos=Submerito::all();
        $documentos=Libro::where('user_id','=',$user->id)->first();
        //return $documentos->documento;
        return view('admin.calificacion.createCalif' ,compact('meritos','submeritos','user','documentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,User $user)
    {
        $calificacion=new Postulante_submerito;
    
        $calificacion->user_id=$user->id;
        
        $meritos=Merito::all();
        $submeritos=Submerito::all();
        $notas=$request->input('notas');
        $documentos=$request->input('doc');
        $caf=0;
        $doc=0;
        $c=0;
        
        foreach($meritos as $merito)
        {
            
            if($user->requerimientos->first()->convocatorias->first()->id==$merito->convocatoria_id)
            {
                foreach($submeritos as $submerito)
                 {
                    if($submerito->merito_id==$merito->id)
                    {
                        
                        $caf=$caf+$notas[$c];
                        $doc=$doc+$documentos[$c];
                        $c++;
                       /* $messages=[
            
                            'notas.required'=>'se requiere el campo puntuacion para continuar',
                           
                            
                            'notas.max'=>'el campo puntaje no debe pasar de los ' . $submerito->score . ' puntos',
                            'notas.min'=>'el campo puntaje debe ser de al menos 1 punto para continuar',
                        ];
                        $validator = Validator::make($request->all(), [
                            'notas'=>'required|max:' . $submerito->score . '|min:1',
                        ],$messages);*/
                    }
                 }
            }
            
        }
       
        //$calificacion->score=$caf*0.20;
        
        $calificacion->score=$caf;
        $calificacion->documentos=$doc;
        $calificacion->save();
       
        return redirect(route('calif.index'))->with([ 'message' => 'calificacion asignada exitosamente!', 'alert-type' => 'success' ]);;
        
        //return $calificacion;
        
    
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
    public function delete(User $user)
    {
        $caf=Postulante_submerito::where('user_id',$user->id)->first();
       
         Postulante_submerito::destroy($caf->id);
         return redirect(route('calif.index'))->with([ 'message' => 'calificacion  eliminada!', 'alert-type' => 'success' ]);
    }
}
