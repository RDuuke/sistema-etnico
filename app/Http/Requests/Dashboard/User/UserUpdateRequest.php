<?php

namespace App\Http\Requests\Dashboard\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
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
            'names'    => 'required|max:50',
            'surnames' => 'required|max:50',
            'document' => ['required', Rule::unique('users')->ignore($this->route('id')), 'max:30'],
            'email'    => ['required','email', Rule::unique('users')->ignore($this->route('id')), 'max:50'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Este campo es requerido',
            'max'      => 'El campo no puede tener más de :max caracteres',
            'email'    => 'El formato ingresado no es valido',
            'unique'   => 'Este valor ya registra en nuestro sistema',
        ];
    }
}
