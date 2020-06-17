<?php

namespace App\Http\Requests;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
           
            case 'POST': {
                return [
            'name'=>'required|max:50|min:3|regex:/^[\pL\s\-]+$/u',
            'lastname'=>'required|max:50|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email|unique:users',
            'username'=>'required|max:20|alpha_num|regex:/^[a-zA-Z0-9]+$/S|unique:users',
            'password'=>'required|max:25|min:8|regex:/^(?=.*[A-Za-z\d$@$!%*?&])(?=.*\d)[A-Za-z\d$@$!%*?&]{8,25}$/S',
            'password_confirm'=>'required|same:password',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
            'name'=>'required|max:50|min:3|regex:/^[\pL\s\-]+$/u',
            'lastname'=>'required|max:50|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email|unique:users,email,' . $this->user->id . ',id',
            'username'=>'required|max:20|alpha_num|regex:/^[a-zA-Z0-9]+$/S|unique:users,username,'. $this->user->id . ',id',
            'password'=>'required|max:25|min:8|regex:/^(?=.*[A-Za-z\d$@$!%*?&])(?=.*\d)[A-Za-z\d$@$!%*?&]{8,25}$/S',
            'password_confirm'=>'required|same:password',
                ];
            }
        }

       
    }
    public function messages()
    {
        return [
           /* 'name.required' => 'se requiere el campo nombre para continuar',
            'lastname.required'  => 'se requiere el campo apellido para continuar',
            'email.required' => 'se requiere el email para continuar',
            'username.required'  => 'se requiere el nombre de usuario para continuar',
            'password.required'  => 'se requiere la contraseña para continuar',
            'password_confirm.required'  => 'se requiere la confirmacion de contraseña para continuar',
            'roles.required'  => 'seleccione al menos un rol para continuar',*/
            'name.required'=>'se requiere el campo nombre para continuar ',
            'name.max'=>'el campo nombre no debe tener mas de 50 caracteres',
            'name.min'=>'el campo nombre tiene un minimo de 3 caracteres',
            'name.regex'=>'el campo nombre no acepta caracteres especiales',
            'lastname.required'=>'se requiere el campo apellido para continuar',
            'lastname.regex'=>'el campo apellido no acepta caracteres especiales',
            'lastname.max'=>'el campo apellido no debe tener mas de 50 caracteres',
            'username.max'=>'el campo nombre de usuario o email no debe tener mas de 50 caracteres',
            'username.required'=>'se requiere el campo nombre de usuario para continuar',
            'username.alpha_num'=>'el campo nombre de usuario no acepta caracteres especiales *,-,! ni tampoco espacios',
            'username.regex'=>'el campo nombre de usuario no acepta espacios',
            'email.required'=>'se requiere el campo email para continuar',
            'username.unique'=>'ya existe este nombre de usuario en nuestros registros',
            'email.email'=>'formato de email invalido Ej:juanperez@****.com',
            'email.unique'=>'ya existe este email en nuestros registros',
            'password.required'=>'se requiere el campo contraseña para continuar',
            'password.max'=>'el campo contraseña tiene un maximo de 25 caracteres',
            'password.min'=>'el campo contraseña tiene un minimo de 8 caracteres',
            'password.regex'=>'el campo contraseña es invalido, la contraseña debe tener al menos una letra y un numero para ser valido',
            'confirmpassword.required'=>'se requiere el campo contraseña para continuar',
            'confirmpassword.same'=>'campo confirmar contraseña y contraseña no cinciden',
        ];
    }
}
