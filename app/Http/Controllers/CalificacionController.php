<?php

namespace App\Http\Controllers;
use App\Merito;
use App\Submerito;
use App\User;
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
        $calificacion=Calificacion_merito::all();
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
        //return $user;
        return view('admin.calificacion.createCalif' ,compact('meritos','submeritos','user'));
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
        $caf=0;
        $c=0;
        $b=0;
        foreach($meritos as $merito)
        {
            
            if($user->requerimientos->first()->convocatorias->first()->id==$merito->convocatoria_id)
            {
                foreach($submeritos as $submerito)
                 {
                    if($submerito->merito_id==$merito->id)
                    {
                        
                        $caf=$caf+$notas[$c];
                        
                        $c++;
                    }
                 }
            }
            
        }
        $calificacion->score=$notas;
        return $caf;
        
    
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
}
