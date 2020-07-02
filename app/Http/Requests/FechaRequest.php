<?php

namespace App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class FechaRequest extends FormRequest
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
            'evento'=>'required|max:200|min:3|regex:/^[\pL\s\-]+$/u|unique:fechas,evento',
            'ubicacion'=>'max:200|regex:/^[\pL\s\-]+$/u',
            'fechaI'=>'required|date|after_or_equal:' . $actual . '',
            'fechaF'=>'required|after_or_equal:fechaI',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'evento'=>'required|max:200|min:3|regex:/^[\pL\s\-]+$/u|unique:fechas,evento,' . $this->fecha->id. ',id',
                    'ubicacion'=>'max:200|regex:/^[\pL\s\-]+$/u',
                    'fechaI'=>'required|date|after_or_equal:' . $actual . '',
                    'fechaF'=>'required|after_or_equal:fechaI',
                ];
            }
        }


    }
    public function messages()
    {
        return[
        'evento.required'=>'se requiere el campo evento para continuar',
        'evento.max'=>'el campo evento no debe tener mas de 200 caracteres',
        'evento.min'=>'el campo evento tiene un minimo de 3 caracteres',
        'evento.regex'=>'el campo evento no acepta caracteres especiales,numeros',
        'evento.unique'=>'el evento ingresado ya existe en nuestros registros',
        'ubicacion.max'=>'el campo ubicacion tiene un maximo de 100 caracteres',
        'ubicacion.regex'=>'el campo ubicacion no acepta caracteres especiales',
        'fechaI.required'=>'se requiere el campo fecha inicial para continuar',
        'fechaI.date'=>'el campo fecha tiene que tener el formato valido de fechas',
        'fechaI.after_or_equal'=>'el campo fecha tiene que ser despues del dia actual',
        'fechaF.required'=>'se requiere el campo fecha final para continuar',
        'fechaF.after_or_equal'=>'el campo fecha final no tiene que estar antes de la fecha inicial',
        
        
        ];
    }
}
