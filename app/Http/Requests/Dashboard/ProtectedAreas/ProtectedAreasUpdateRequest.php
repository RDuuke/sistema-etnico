<?php

namespace App\Http\Requests\Dashboard\ProtectedAreas;

use Illuminate\Foundation\Http\FormRequest;

class ProtectedAreasUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'year'                              => 'required|numeric|max:2050|min:1970',
            'protected_hectares'                => 'required|numeric',
            'payments_environmental_services'   => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Este campo es requerido',
            'max'      => 'El campo no puede tener más de :max caracteres',
            'email'    => 'El formato ingresado no es valido',
            'unique'   => 'Este valor ya registra en nuestro sistema',
            'numeric'  => 'El valor debe ser numérico',
            'year.numeric' => 'El año debe ser numérica entre 1970 y 2050',
            'year.min'     => 'El año mínima es 1970',
            'year.max'     => 'El año máxima es 2050',
        ];
    }
}
