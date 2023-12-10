<?php
namespace App\Http\Requests\Dashboard\Communities;

final class CommunityRequest {

    public static function rules() {
        return  [
            'community.name'                    => 'required',
            'community.type_community'          => 'required',
            'community.contact_phone'           => 'required',            
            'community.contact_email'           => 'required|email:rfc|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',            
            'community.type_of_area_id'         => 'required|numeric',            
            'community.occupied_area'           => 'required',            
            'community.coordinates'             => 'required',        
            'community.territorial_id'          => 'required|numeric',            
            'community.subregion_id'            => 'required|numeric',        
            'community.hamlet_id'               => 'required|numeric',        
            'community.district_id'             => 'required|numeric',        
            'community.municipality_id'         => 'required|numeric',

            /**Optionals */
            'community.reservation_name'        => 'nullable|required_if:community.type_community,1',
            'community.town_name'               => 'nullable|required_if:community.type_community,1',
            'community.collective_title'        => 'nullable|required_if:community.type_community,2',
        ];
    }

    public static function messages() {
        return [
            'max'         => 'El campo no puede tener más de 255 caracteres',
            'required'    => 'El campo es requerido',
            'required'    => 'El campo es requerido',
            'required'    => 'El campo es requerido',
            'required'    => 'El campo es requerido',
            'required_if' => 'El campo es requerido',
            'numeric'     => 'El campo es requerido',
            'email'       => 'El correo electrónico ingresado no es valido',
            'regex'       => 'El correo electrónico ingresado no es valido',
            'unique'      => 'Este nombre ya registra en nuestro sistema',
        ];
    }
}