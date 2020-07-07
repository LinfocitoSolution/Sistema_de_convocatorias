<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConvocatoriaRequest extends FormRequest
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
            'titulo'=>'required|max:200|min:3|regex:/^[\pL\s\-]+$/u|unique:convocatorias,titulo_convocatoria',
            'unidad'=>'required',
            'requerimientos'=>'required',
            'descripcion'=>'required|min:5|max:900',
            'requisito'=>'required|min:5|max:900',
            'docsapresentar'=>'required|min:5|max:900',
            'evento'=>'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'titulo'=>'required|max:200|min:3|regex:/^[\pL\s\-]+$/u|unique:convocatorias,titulo_convocatoria,' . $this->convocatoria->id . ',id',
                    'unidad'=>'required',
                    'requerimientos'=>'required',
                    'descripcion'=>'required|min:5|max:900',
                    'requisito'=>'required|min:5|max:900',
                    'docsapresentar'=>'required|min:5|max:900',
                    'evento'=>'required',
                ];
            }
        }


    }
    public function messages()
    {
        return[
        'titulo.required'=>'se requiere el campo titulo para continuar',
        'titulo.max'=>'el campo titulo no debe tener mas de 200 caracteres',
        'titulo.min'=>'el campo titulo tiene un minimo de 3 caracteres',
        'titulo.regex'=>'el campo titulo no acepta caracteres especiales,numeros',
        'titulo.unique'=>'el titulo ingresado ya existe en nuestros registros',
        'unidad.required'=>'debe seleccionar una unidad para continuar',
        'requerimientos.required'=>'debe seleccionar al menos un requerimiento para continuar',
        'descripcion.required'=>'el campo descripcion no puede estar vacio',
        'descripcion.min'=>'el campo descripcion tiene un minimo de 5 caracteres',
        'descripcion.max'=>'el campo descripcion tiene un maximo de 900 caracteres',
        'requisito.required'=>'el campo requisitos no puede estar vacio',
        'requisito.min'=>'el campo requisitos tiene un minimo de 5 caracteres',
        'requisito.max'=>'el campo requisitos tiene un maximo de 900 caracteres',
        'docsapresentar.required'=>'el campo documentos a presentar no puede estar vacio',
        'docsapresentar.min'=>'el campo documentos a presentar tiene un minimo de 5 caracteres',
        'docsapresentar.max'=>'el campo documentos a presentar tiene un maximo de 900 caracteres',
        ];
    }
}

