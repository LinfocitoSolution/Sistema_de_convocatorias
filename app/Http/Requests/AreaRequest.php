<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
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
            'name'=>'required|max:100|min:3|regex:/^[\pL\s\-]+$/u',
            'description'=>'max:100',
        ];
    }
    public function messages()
    {
        return[
        'name.required'=>'se requiere el campo nombre para continuar',
        'name.max'=>'el campo nombre no debe tener mas de 50 caracteres',
        'name.min'=>'el campo nombre tiene un minimo de 3 caracteres',
        'name.regex'=>'el campo nombre no acepta caracteres especiales,numeros',
        'description.max'=>'el campo descripcion tiene un maximo de 100 caracteres',
        
        ];
    }
}
