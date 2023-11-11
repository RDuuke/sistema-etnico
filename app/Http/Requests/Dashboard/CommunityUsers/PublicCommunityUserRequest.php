<?php

namespace App\Http\Requests\Dashboard\CommunityUsers;

use Illuminate\Foundation\Http\FormRequest;

class PublicCommunityUserRequest extends FormRequest
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
            'names'                 => 'required|max:50',
            'surnames'              => 'required|max:50',
            'type_document_id'      => 'required|numeric|exists:type_of_documents,id',
            'document'              => 'required|unique:community_users,document|max:30',
            'age'                   => 'required|numeric',
            'gender_id'             => 'required|numeric|exists:genders,id',
            'phone_1'               => 'required|numeric',
            'phone_2'               => 'nullable|numeric',
            'email'                 => 'required|email|unique:community_users,email|max:50',
            'community_id'          => 'required|numeric|exists:communities,id',
            'educational_level_id'  => 'required|numeric|exists:educational_levels,id',
            'training_area_id'      => 'required|numeric|exists:training_areas,id',
            'occupation_id'         => 'required|numeric|exists:occupations,id',
            'strategy_id'           => 'required|numeric|exists:strategies,id',

        ];
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