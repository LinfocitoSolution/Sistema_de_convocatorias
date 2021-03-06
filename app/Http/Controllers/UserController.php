<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\User;
use Session;
use App\Role;
use App\Unidad;
use DB;
use Validator;
use App\Http\Requests\UsuarioRequest;

class UserController extends Controller
{
    /**
     * Class constructor.
     */
    // public function __construct()
    // {
    //     $this-> middleware('permission:create users')->only(['create','store']);
    //     $this-> middleware('permission:list users')->only('index');
    //     $this-> middleware('permission:edit users')->only(['edit','update']);
    //     // $this-> middleware('permission:list users')->only('show');//show        
    //     $this-> middleware('permission:delete users')->only('destroy');
  
    // }
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
        $unidades = Unidad::all();
        $roles = DB::table('roles')->get();
        return view('admin.usuarios.create',compact('roles','unidades'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioRequest $request)
    {
        $user = User::create($request->all());
        $user->password=(bcrypt($user->password));
        $user->unit_id=$request->get('unidad');
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
    public function show(User $user)
    {
        return view('admin.usuarios.show',compact('user'));
    }
    public function verificarEmail($email)
    {
        $access_key = '7b5fa3d815e2bf9c458dfa744298a253';   
        $email_address = $email;
        // Initialize CURL:
        $ch = curl_init('https://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'&smtp=1&format=1');  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);
        // Decode JSON response:
        $validationResult = json_decode($json, true);
        return redirect(route('register'))->with([ 'errors' => 'El email no existe', 'alert-type' => 'success' ]);
        // return $validationResult['smtp_check'];
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $unidades = Unidad::all();
        $roles = DB::table('roles')->get();
        return view('admin.usuarios.edit',compact('roles','user','unidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user,UsuarioRequest $request)
    {
        $user->update($request->all());
        $user->password = (bcrypt($user->password));
        $user->unit_id=$request->get('unidad');
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