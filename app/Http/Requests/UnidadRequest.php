<?php

namespace App\Http\Requests;
use \App\Unidad;
use Illuminate\Foundation\Http\FormRequest;

class UnidadRequest extends FormRequest
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
                'name'=>'required|max:100|min:3|regex:/^[\pL\s\-]+$/u |unique:unidades',
                'description'=>'required|max:300',
                
                    ];
                }
                case 'PUT':
                case 'PATCH': {
                    return [
                'name'=>'required|max:50|min:3|regex:/^[\pL\s\-]+$/u |unique:unidades,name,' . $this->id . ',id',
                'description'=>'required|max:50',
                
                    ];
                }
            }

        
    }
    public function messages()
    {
        return [
            'name.required'=>'se requiere el campo nombre para continuar',
            'name.max'=>'el campo nombre no debe tener mas de 100 caracteres',
            'name.min'=>'el campo nombre tiene un minimo de 3 caracteres',
            'name.regex'=>'el campo nombre no acepta caracteres especiales,numeros',
            'name.unique'=>'el nombre ingresado ya existe en nuestros registros',
            'description.required'=>'se requiere el campo descripcion para continuar',
            'description.max'=>'el campo descripcion tiene un maximo de 100 caracteres',
            
        ];
    }
}
