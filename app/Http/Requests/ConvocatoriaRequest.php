<?php

namespace App\Http\Requests;
use Carbon\Carbon;
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
        $actual=Carbon::now();
        switch ($this->method()) {
            case 'GET':
           
            case 'POST': {
                return [
            'titulo'=>'required|max:200|min:3|regex:/^[a-zA-Z0-9]+/s|unique:convocatorias,titulo_convocatoria',
            'unidad'=>'required',
            'gestion'=>'required|after_or_equal:' . $actual . '',
            'requerimientos'=>'required',
            'requisito'=>'required|min:5|max:3000',
            'eventos'=>'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'titulo'=>'required|max:200|min:3|regex:/^[a-zA-Z0-9]+/s|unique:convocatorias,titulo_convocatoria,' . $this->call->id . ',id',
                    'unidad'=>'required',
                    'gestion'=>'required|date|after_or_equal:' . $actual . '',
                    'requerimientos'=>'required',
                    'requisito'=>'required|min:5|max:3000',
                    'eventos'=>'required',
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
        'gestion.required'=>'se requiere el campo gestion para continuar',
        'gestion.after_or_equal'=>'el campo gestion tiene que ser despues del dia actual',
        'gestion.date'=>'el campo gestion tiene que tener el formato de fecha',
        'requerimientos.required'=>'debe seleccionar al menos un requerimiento para continuar',
        'requisito.required'=>'el campo requisitos no puede estar vacio',
        'requisito.min'=>'el campo requisitos tiene un minimo de 5 caracteres',
        'requisito.max'=>'el campo requisitos tiene un maximo de 900 caracteres',
        'eventos.required'=>'se requiere el capo eventos para continuar',
        ];
    }
}

