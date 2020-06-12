<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:50|min:3|regex:/^[\pL\s\-]+$/u',
            'lastname' => 'required|max:50|regex:/^[\pL\s\-]+$/u',
            'username' => 'required|unique:users|max:20|alpha_num|regex:/^[a-zA-Z0-9]+$/S',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:25|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,25}$/S',
            'confirmpassword' => 'required|same:password'
        ],[
            'name.required'=>'se requiere el campo nombre para continuar ',
            'name.max'=>'el campo nombre no debe tener mas de 50 caracteres',
            'name.min'=>'el campo nombre tiene un minimo de 3 caracteres',
            'name.regex'=>'el campo nombre no acepta caracteres especiales',
            'lastname.required'=>'se requiere el campo apellido para continuar',
            'lastname.regex'=>'el campo apellido no acepta caracteres especiales',
            'lastname.max'=>'el campo apellido no debe tener mas de 50 caracteres',
            'username.max'=>'el campo nombre de usuario o email no debe tener mas de 50 caracteres',
            'username.required'=>'se requiere el campo nombre de usuario para continuar',
            'username.alpha_num'=>'el campo nombre de usuario no acepta caracteres especiales *,-,!',
            'username.regex'=>'el campo nombre de usuario no acepta espacios',
            'username.unique'=>'ya existe este nombre de usuario en nuestros registros',
            'email.required'=>'se requiere el campo email para continuar',
            'email.email'=>'formato de email invalido Ej:juanperez@****.com',
            'email.unique'=>'ya existe este email en nuestros registros',
            'password.required'=>'se requiere el campo contraseña para continuar',
            'password.max'=>'el campo contraseña tiene un maximo de 25 caracteres',
            'password.min'=>'el campo contraseña tiene un minimo de 8 caracteres',
            'password.regex'=>'el campo contraseña es invalido',
            'confirmpassword.required'=>'se requiere el campo contraseña para continuar',
            'confirmpassword.same'=>'campo confirmar contraseña y contraseña no cinciden',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'career' => $data['career'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

     public function register(Request $request)
     {
         $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $user->assignRole(['Postulante']);

         return $this->registered($request, $user)
             ?: redirect($this->redirectPath())->with('message', 'usuario registrado con exito!!!!!!');;
     }
    
}
