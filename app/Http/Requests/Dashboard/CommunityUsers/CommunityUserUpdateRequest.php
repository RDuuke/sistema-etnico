<?php

namespace App\Http\Requests\Dashboard\CommunityUsers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CommunityUserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public $guardWeb = false;
    public function authorize()
    {
        if (Auth::user()) $this->guardWeb = true; 
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'names'                 => 'required|max:50',
            'surnames'              => 'required|max:50',
            'type_document_id'      => 'required|numeric|exists:type_of_documents,id',
            'document'              => ['required', Rule::unique('community_users')->ignore($this->route('id')), 'max:30'],
            'age'                   => 'required|numeric',
            'gender_id'             => 'required|numeric|exists:genders,id',
            'phone_1'               => 'required|numeric',
            'phone_2'               => 'nullable|numeric',
            'email'                 => ['required', 'email', Rule::unique('community_users')->ignore($this->route('id')), 'max:50'],
            'community_id'          => 'required|numeric|exists:communities,id',
            'educational_level_id'  => 'required|numeric|exists:educational_levels,id',
            'training_area_id'      => 'required|numeric|exists:training_areas,id',
            'occupation_id'         => 'required|numeric|exists:occupations,id',
            'strategy_id'           => 'required|numeric|exists:strategies,id',
        ];

        if ($this->guardWeb) return array_merge($rules, ['role' => 'required']);
        return array_merge($rules, ['role' => 'nullable']);
    }

    public function messages(): array
    {
        return [
            'required' => 'Este campo es requerido',
            'max'      => 'El campo no puede tener más de :max caracteres',
            'email'    => 'El formato ingresado no es valido',
            'unique'   => 'Este valor ya registra en nuestro sistema',

            'type_document_id.numeric'      => 'Este campo es requerido',
            'gender_id.numeric'             => 'Este campo es requerido',
            'community_id.numeric'          => 'Este campo es requerido',
            'educational_level_id.numeric'  => 'Este campo es requerido',
            'training_area_id.numeric'      => 'Este campo es requerido',
            'occupation_id.numeric'         => 'Este campo es requerido',
            'strategy_id.numeric'           => 'Este campo es requerido',
        ];
    }
}
