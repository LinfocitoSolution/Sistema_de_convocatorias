<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
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
            'name'=>'required',
            'documento'=>'required|numeric|max:100|min:1',
            'fecha_entrega'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'se requiere el campo nombre para continuar',
            'documento.required'=>'se requiere el campo numero de documentos para continuar',
            'documento.numeric'=>'el campo numero de documentos tiene que ser numerico',
            'documento.max'=>'el maximo valor para el numero de documentos es de 100',
            'documento.min'=>'el minimo valor para el numero de documentos es de 1',
            'fecha_entrega.required'=>'se requiere la hora de entrega para continuar',
        ];
    }
}
