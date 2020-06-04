<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
            'username' => 'required|max:20|alpha_num',
            'email' => 'required|email|unique:users',
            'password' => 'required|max:25|min:8',
            'confirmpassword' => 'required|same:password'
        ],[
            'name.required'=>'El campo Nombre es requerido',
            'lastname.required'=>'El campo Apellido es requerido',
            'username.required'=>'El campo Contraseña es requerido',  
            'email.required'=>'El campo Email es requerido',
            'password.required'=>'El campo Contraseña es requerido',
            'confirmpassword.required'=>'Debe confirmar su contraseña',
            'confirmpassword.same'=>'Las contraseñas no coinciden'
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

    // public function register(Request $request)
    // {
    //     $this->validator($request->all())->validate();

    //     event(new Registered($user = $this->create($request->all())));

    //     $this->guard()->login($user);

    //     return $this->registered($request, $user)
    //         ?: redirect($this->redirectPath());
    // }
    
}
