<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers {
        logout as performLogout;
    }
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'administrador';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
    public function login(Request $request)
{
    $this->validate($request, [
        'login'    => 'required',
        'password' => 'required',
    ],[
        'login.required'=>'el campo username o email es requerido',
        'password.required'=>'el campo contraseña es requerido',  
    ]);
    
   
   

    $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL ) 
        ? 'email' 
        : 'username';

    $request->merge([
        $login_type => $request->input('login')
    ]);

    if (Auth::attempt($request->only($login_type, 'password'))) {
        return redirect()->intended($this->redirectPath());
    }

    return redirect()->back()
        ->withInput()
        ->withErrors([
            'password' => 'usuario o email /password incorrecto',
        ]);
    } 


    public function username()
    {
        return 'username';
    }
    public function registrado()
    {
        if(Auth::check())
        {               
               return view("admin.administrador");
               //return view("admin.rolpostulante");
        }
       
    }

    
}
