<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Usuario;

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
        $postulantes = Usuario::all();
        return view('users.index', compact('postulantes')); //compact genera un array de postulantes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.postulante');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $usuario = new Usuario();
        $usuario->nombre = $request->input('Nombre');
        $usuario->apellido = $request->input('Apellido');
        //$usuario->cedula = $request->input('Ci');
        //$usuario->fechaNac = $request->input('Fecha_nacimiento');
        $usuario->carrera = $request->input('Carrera');
        $usuario->email = $request->input('Email');
        $usuario->password = $request->input('Password');
        $usuario->password = (bcrypt($usuario->password));
        $usuario->save();
        return 'Saved';
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
}
