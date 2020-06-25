<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequerimientoRequest extends FormRequest
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
            'nombre_auxiliatura'=>'required|max:100|min:5|regex:/^[\pL\s\-]+$/u|unique:requerimientos,nombre_auxiliatura',
            'codigo_auxiliatura'=>'required|min:3|alpha_dash|max:10|unique:requerimientos,codigo_auxiliatura',
            'cantidad_de_auxiliares'=>'required|min:1|digits_between:1,5|numeric',
            'cantidad_horas_academicas'=>'required|min:1|max:100|numeric',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'nombre_auxiliatura'=>'required|max:100|min:5|regex:/^[\pL\s\-]+$/u|unique:requerimientos,nombre_auxiliatura,' . $this->requerimiento->id . ',id',
                    'codigo_auxiliatura'=>'required|min:3|max:10|alpha_dash|unique:requerimientos,codigo_auxiliatura,' . $this->requerimiento->id . ',id',
                    'cantidad_de_auxiliares'=>'required|min:1|digits_between:1,5|numeric',
                    'cantidad_horas_academicas'=>'required|min:1|max:100|digits_between:1,3|numeric',
                ];
            }
        }
    }
    public function messages()
    {
        return[
            'nombre_auxiliatura.required'=>'se requiere el campo nombre para continuar',
            'nombre_auxiliatura.max'=>'el nombre de auxiliatura no debe pasar los 100 caracteres',
            'nombre_auxiliatura.min'=>'el nombre de auxiliatura debe ser mayor a  los 5 caracteres',
            'nombre_auxiliatura.regex'=>'el nombre de auxiliatura no debe tener caracteres especiales, ni numeros',
            'nombre_auxiliatura.unique'=>'este nombre de auxiliatura ya existe en nuestros registros',
            'codigo_auxiliatura.required'=>'se requiere el campo codigo de auxiliatura',
            'codigo_auxiliatura.min'=>' el  valor de codigo de auxiliatura debe ser mayor a 3 caracteres',
            'codigo_auxiliatura.max'=>' el  valor de codigo de auxiliatura no debe ser mayor a 10 caracteres',
            'codigo_auxiliatura.alpha_dash'=>'el codigo auxiliatura solo permite numeros,letras y guiones ',
            'codigo_auxiliatura.regex'=>'el codigo auxiliatura no permite espacios ni caracteres especiales',
            'codigo_auxiliatura.unique'=>'este codigo de auxiliatura ya existe en nuestros registros',
            'cantidad_de_auxiliares.required'=>'se requiere la cantidad de auxiliares para continuar',
            'cantidad_de_auxiliares.min'=>'el valor de la cantidad de auxiliares debe ser mayor a 1',
            'cantidad_de_auxiliares.digits_between'=>'el rango de digitos de la cantidad de auxiliares esta entre 1-5',
            'cantidad_de_auxiliares.numeric'=>'la cantidad de auxiliares solo debe ser numeros',
            'cantidad_horas_academicas.required'=>'se requiere la cantidad de horas academicas para continuar',
            'cantidad_horas_academicas.min'=>'la cantidad de horas academicas debe ser mayor a 1 ',
            'cantidad_horas_academicas.max'=>'la cantidad de horas academicas no debe pasar los 100 ',
            'cantidad_horas_academicas.numeric'=>'la cantidad de horas academicas solo debe ser numeros',
            'cantidad_horas_academicas.digits_between'=>'el rango de digitos de la cantidad de horas academicas esta entre 1-3',
            
            ];
    }
}
