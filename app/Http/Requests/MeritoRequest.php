<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MeritoRequest extends FormRequest
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
                'convocatoria'=>'required',
                'name'=>'required|max:50|min:3|regex:/^[\pL\s\-]+$/u',
                //'score'=>'required|numeric|digits_between:1,3|max:' . $this->meritosa . '|min:1',
                
               
            ];
        
    }
    public function messages()
    {
        return [
            'convocatoria.required' => 'se requiere el campo convocatoria para continuar',
            'name.required' => 'se requiere el campo nombre para continuar',
            'name.max'=>'el campo nombre no debe tener mas de 50 caracteres',
            'name.min'=>'el campo nombre tiene un minimo de 3 caracteres',
            'name.regex'=>'el campo nombre no acepta caracteres especiales',
            /*'score.required'=>'se requiere el campo puntuacion para continuar',
            'score.numeric'=>'el campo puntuacion debe ser numerico',
            'score.digits_between'=>'el campo puntaje tiene que tener entre 1 y 3 digitos',
            'score.max'=>'el campo puntaje no debe pasar de los ' . $this->meritosa . ' puntos',
            'score.min'=>'el campo puntaje debe ser de al menos 1 punto para continuar',*/

        ];
    }
}
