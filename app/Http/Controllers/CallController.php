<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function docencia()
     {
        return view("calls.docencia");
     }
     public function login()
     {
        return view("logins.login");
     }
    public function register()
    {
        return view("calls.register");
    }
     public function noregister()
    {
        return view("calls.noregister");
    }
    public function index()
    {
        return 'Hello there';
    }
    public function formulariopost()
    {
        return view("calls.formulariopost");
    }
    public function convocatorias()
    {
        return view("calls.convocatorias");
    }
    public function calendario()
    {
        return view("calls.calendario");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('calls.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->textarea('description','docs');
        $convocatoria = new Convocatoria();
        $convocatoria->$request->input('titulo_convocatoria');
        $convocatoria->save();

        return 'Saved';
        //return $request->
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
    public function postulante(Request $request)
    {
        return view('users.postulante');
    }


    public function regJefDep(Request $request)
    {
        return view('users.registro_jefeDep');
    }

    public function regDirector(Request $request)
    {
        return view('users.registro_director');
    }

    public function comMerito(Request $request)
    {
        return view('users.comision_merito');
    }

    public function conocimiento()
    {
        return view('calls.comision_conocimiento');
    }

    public function secretaria()
    {
        return view('users.secretaria');
    }
    public function plantilla()
    {
        return view('layouts.plantilla');
    }
   
}
