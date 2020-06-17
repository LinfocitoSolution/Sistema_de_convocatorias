<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //quitar esta linea para que el reset password tmb funcione para usuarios ya logueados
        $this->middleware('guest');
    }
     public function resetPassword(Request $request){
         //Aqui llega el correo del solicitante para recuperar contraseña si es valida mostrará la siguiente vista de la linea 41
         //Si su email no es valida tendria que mostrar la misma vista index_ResetPasword.
         return view('auth.resetPassword');
     }
     public function enviarReset_Password(){ 
         //viene desde login con la solicitud de recuperar contraseña
         return view('auth.index_ResetPassword');
     }
     public function recuperar(Request $request){
         //despues de haber llenado el formulario de recuperar resetPassword le enviará a la vista login 
         //Si los datos son correctos se le enviara a la vista login y si no tendria que volver a la misma vista de resetPassword.
         return redirect("login");
     }

     
}
