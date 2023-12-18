<?php

namespace App\Http\Requests\Dashboard\WaterStrategies;

final class WaterStrategyRequest
{

    public static function rules()
    {
        return  [
            'community_id'                      => 'required',
            'drinking_water'                    => 'required',
            'drinking_water_date'               => 'required',
            'drinking_water_status'             => 'required',
            'water_purification_system'         => 'required',
            'water_purification_system_date'    => 'required',
            'water_purification_system_status'  => 'required',
            'families_with_drinking_water'      => 'required',
            'aqueduct'                          => 'required',
            'aqueduct_date'                     => 'required',
            'aqueduct_status'                   => 'required',
            'septic_tank_sewer'                 => 'required',
            'septic_tank_date'                  => 'required',
            'septic_tank_status'                => 'required',
            'families_with_sewer'               => 'required',
        ];
    }

    public static function messages()
    {
        return [
            'max'         => 'El campo no puede tener más de 255 caracteres',
            'required'    => 'El campo es requerido',
            'required_if' => 'El campo es requerido',
            'numeric'     => 'El campo es requerido',
        ];
    }
}
