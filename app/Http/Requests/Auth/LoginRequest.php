<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'     => 'required|email:rfc',
            'password'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'Este campo es requerido',
            'email'     => 'El formato ingresado no es valido',
        ];
    }
}
