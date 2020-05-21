<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Validator;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //la vista index mostrará el listado de postulantes registrados
        $postulantes = User::all();
        return view('users.listaPostulantes', compact('postulantes')); //compact genera un array de postulantes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro.postulante');
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
            'Nombre' => 'required | max: 50 | alpha | min:3',
            'Apellido' => 'required | max: 50 | alpha | min:3' , 
            'Username' => 'required | max: 20 | alpha',
            'Carrera' => 'required | max: 25 | alpha',
            'Email' => 'required | email',
            'Password' => 'required | max: 25 | min:8',
            'confirmpassword' => 'required|same:Password'
        ]);

       if ($validator->fails()) {
            return redirect('users/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        $usuario = new User();
        
        $usuario->name = $request->input('Nombre');
        $usuario->lastname = $request->input('Apellido');
        $usuario->username = $request->input('Username');  
        $usuario->career = $request->input('Carrera');
        $usuario->email = $request->input('Email');
        $usuario->password = bcrypt($request->input('Password'));
        //$usuario->password = (bcrypt($usuario->password));
        $usuario->save();
        // return view("calls.noregister");Richard
        return view("index");
       // return $request->all();   
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
    public function comMerito(Request $request)
    {
        return view('users.comision_merito');
    }

    public function regJefDep(Request $request)
    {
        return view('users.registro_jefeDep');
    }

    public function regDirector(Request $request)
    {
        return view('users.registro_director');
    }

    public function conocimiento()
    {
        return view('users.comision_conocimiento');
    }

    public function secretaria()
    {
        return view('users.secretaria');
    }

    
}
