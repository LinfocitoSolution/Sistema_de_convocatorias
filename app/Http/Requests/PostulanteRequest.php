<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostulanteRequest extends FormRequest
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
        return [
            'name'=>'required|max:50|min:3|regex:/^[\pL\s\-]+$/u',
            'lastname'=>'required|max:50|regex:/^[\pL\s\-]+$/u',
            // 'email'=>'required|email|unique:users,email,' . $this->user->id . ',id',
            // 'username'=>'required|max:20|alpha_num|regex:/^[a-zA-Z0-9]+$/S|unique:users,username,'. $this->user->id . ',id',
        ];
    }
    public function messages()
    {
        return [
           
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
            
        ];
    }
}
