<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use App\Role;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.usuarios.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $roles = DB::table('roles')->get();
        return view('admin.usuarios.create',compact('roles'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->password=(bcrypt($user->password));
        $user->save();

        $user->syncRoles($request->roles);

        return redirect(route('usuarios.index'))->with([ 'message' => 'Usuario creado exitosamente!', 'alert-type' => 'success' ]);
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
    public function edit(User $user)
    {
        $roles = DB::table('roles')->get();

        return view('admin.usuarios.edit',compact('roles','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user,Request $request)
    {
        $user->update($request->all());
        $user->password = (bcrypt($user->password));
        $user->save();

        $user->syncRoles($request->roles);//con esto asigna el rol seleccionado para los usuarios

        return redirect(route('usuarios.index'))->with([ 'message' => 'Usuario actualizado exitosamente!', 'alert-type' => 'success' ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        Session::flash('flash_message3', 'Usuario  '.$id.' Eliminado!');

        return redirect(route('usuarios.index'))->with([ 'message' => 'Usuario eliminado exitosamente!', 'alert-type' => 'info' ]);
    }
}
