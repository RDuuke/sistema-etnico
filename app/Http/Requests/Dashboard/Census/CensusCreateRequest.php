<?php

namespace App\Http\Requests\Dashboard\Census;

use Illuminate\Foundation\Http\FormRequest;

class CensusCreateRequest extends FormRequest
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
            'number_of_families'    => 'required|numeric',
            'number_of_people'      => 'required|numeric',
            'year'                  => 'required|date',
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
        ];
    }
}
