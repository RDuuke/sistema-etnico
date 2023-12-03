<?php
namespace App\Http\Requests\Dashboard\Communities;

final class CommunityRequest {

    public static function rules() {
        return  [
            'community.name'                    => 'required',
            'community.type_of_area_id'         => 'required|numeric',            
            'community.occupied_area'           => 'required',            
            'community.coordinates'             => 'required',        
            'community.territorial_id'          => 'required|numeric',            
            'community.subregion_id'            => 'required|numeric',        
            'community.hamlet_id'               => 'required|numeric',        
            'community.district_id'             => 'required|numeric',        
            'community.municipality_id'         => 'required|numeric',

            /**Optionals */
            'community.reservation_name'        => 'required',
            'community.town_name'               => 'required',        
            'community.collective_title'        => 'nullable',            
            'community.name_community_council'  => 'nullable',                    
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
        ];
    }
}