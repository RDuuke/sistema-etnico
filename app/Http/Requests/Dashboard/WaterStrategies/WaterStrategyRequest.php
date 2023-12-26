<?php

namespace App\Http\Requests\Dashboard\WaterStrategies;

final class WaterStrategyRequest
{

    public static function rules()
    {
        return  [
            'water_strategy.drinking_water'                    => 'required|numeric',
            'water_strategy.drinking_water_date'               => 'required|numeric|max:2050|min:1970',
            'water_strategy.drinking_water_status'             => 'required|numeric',
            'water_strategy.water_purification_system'         => 'required|numeric',
            'water_strategy.water_purification_system_date'    => 'required|numeric|max:2050|min:1970',
            'water_strategy.water_purification_system_status'  => 'required|numeric',
            'water_strategy.families_with_drinking_water'      => 'required|numeric',
            'water_strategy.aqueduct'                          => 'required|numeric',
            'water_strategy.aqueduct_date'                     => 'required|numeric|max:2050|min:1970',
            'water_strategy.aqueduct_status'                   => 'required|numeric',
            'water_strategy.families_with_aqueduct'            => 'required|numeric',
            'water_strategy.septic_tank_sewer'                 => 'required|numeric',
            'water_strategy.septic_tank_date'                  => 'required|numeric|max:2050|min:1970',
            'water_strategy.septic_tank_status'                => 'required|numeric',
            'water_strategy.families_with_sewer'               => 'required|numeric',
        ];
    }

    public static function messages()
    {
        return [
            'max'         => 'El campo no puede tener más de 255 caracteres',
            'required'    => 'El campo es requerido',
            'required_if' => 'El campo es requerido',
            'numeric'     => 'El campo es requerido',
            'min'         => 'Año mínimo 1970',
            'max'         => 'Año máximo 2050',
        ];
    }
}
