<?php

namespace App\Http\Requests;

use Spatie\Permission\Models\Role;
use Illuminate\Foundation\Http\FormRequest;

class RolesRequest extends FormRequest
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
                    'name'=>'required|max:50|min:3|regex:/^[\pL\s\-]+$/u|unique:roles,name',
                    'permissions'=>'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'name'=>'required|max:50|min:3|regex:/^[\pL\s\-]+$/u|unique:roles,name,' . $this->rol->id . ',id',
                    'permissions'=>'required',
                ];
            }
        }

      
    }
    public function messages()
    {
        return [
            'name.required'=>'se requiere el campo nombre para continuar',
            'name.max'=>'el campo nombre no debe tener mas de 50 caracteres',
            'name.min'=>'el campo nombre tiene un minimo de 3 caracteres',
            'name.regex'=>'el campo nombre no acepta caracteres especiales,numeros',
            'name.unique'=>'el nombre ingresado ya esta en nuestros registros',
            'permissions.required'=>'selecciona  al menos un permiso para continuar',
            
        ];
    }
}
