<?php

namespace App\Http\Controllers;
use App\Merito;
use App\Submerito;
use App\User;
use App\Libro;
use App\Descripcion;
use App\Calificacion_conocimiento;
use App\Carrera;
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
        
      
    
        if(request()->has("carrera"))
        {
            $users = User::where('carrera_id', '=', request('carrera'))->get();
        }
        else 
        {
         
            $users=User::all();
       
        }
        $calificacion=Postulante_submerito::all();
        $carreras=Carrera::all();
        return view('admin.calificacion.index',compact('users','calificacion','a','carreras'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $descripciones=Descripcion::all();
        $users=User::where('id','=',$user->id);
        $meritos=Merito::all();
        $submeritos=Submerito::all();
        $documentos=Libro::where('user_id','=',$user->id)->first();
        //return $documentos->documento;
        return view('admin.calificacion.createCalif' ,compact('meritos','submeritos','user','documentos','descripciones'));
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
        $descripciones=Descripcion::all();
        $notas=$request->input('notas');
        $documentos=$request->input('doc');
        $puntaje=0;
        $caf=0;
        $doc=0;
        $c=0;
        $d=0;
        $docen=0;
        foreach($meritos as $merito)
        {
            
            if($user->requerimientos->first()->convocatorias->first()->id==$merito->convocatoria_id)
            {
                $dc=Libro::where('user_id',$user->id)->first()->documento;
                foreach($submeritos as $submerito)
                 {
                    if($submerito->merito_id==$merito->id)
                    {
                        foreach($descripciones as $desc)
                        {
                            if($desc->submerito_id==$submerito->id)
                            {
                                if($desc->tipo_descripcion=="documentos")
                                {
                                    
                                    $docen=$docen+$documentos[$c];
                                    $doc=$documentos[$c] * $desc->score;
                                    $puntaje=$puntaje + $doc;
                                    /*echo "descripcion" . $desc->descripcion . "<br>";
                                    echo  $desc->descripcion . "<br>"; 
                                    echo  $documentos[$c] . "*" . $desc->score . "=" .  $doc . "<br>" ;*/
                                    
                                    $c++;
                                    $doc=0;

                                }
                                else 
                                {
                                    if($desc->tipo_descripcion=="promedio")
                                {
                                    $caf=$caf+$notas[$d];
                                    
                                    $d++;
                                    //echo "puntos en promedio:" . $caf;
                                    
                                }
                                }
                                
                                
                            }
                        }
                        
                      
                    }
                 }
            }
            
        }
       
        
        
        $calificacion->score=($caf + $puntaje)*0.20;
        $calificacion->documentos=$docen;
        if($docen>$dc)
        {
        return redirect(route('crearCalif.create',$user))->with([ 'messageDanger' => 'la suma total de documentos no puede exceder los registrados de este postulante', 'alert-type' => 'danger' ]);
        }
        else 
        {
        $calificacion->save();
       
        return redirect(route('calif.index'))->with([ 'message' => 'calificacion asignada exitosamente!', 'alert-type' => 'success' ]);
        }
        //return $calificacion->score;
    
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
    public function notafinal(){
        return view('admin.notaFinal.index');
    }
    public function publicar(User $user)
    {
        $postulante=Postulante_submerito::where('user_id',$user->id)->first();
        $postulante->publicado="si";
        //return $postulante;
        $postulante->save();
        return redirect(route('calif.index'))->with([ 'message' => 'Nota publicada exitosamente!', 'alert-type' => 'success' ]);
    }
    public function quitarPublicacion(User $user)
    {
        $postulante=Postulante_submerito::where('user_id',$user->id)->first();
        $postulante->publicado="no";
        //return $user;
        $postulante->save();
        return redirect(route('calif.index'))->with([ 'message' => 'Nota quitada exitosamente!', 'alert-type' => 'success' ]);
    }
    public function muestra(User $user)
    {
        $calf=Calificacion_conocimiento::where('user_id',$user->id)->first();
        $postulante=(Postulante_submerito::where('user_id',$user->id)->first()->score);
        return view('admin.calificacion.descripcion' , compact('postulante','calf'));
    }
}
