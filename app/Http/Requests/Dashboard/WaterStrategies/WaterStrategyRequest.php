<?php

namespace App\Http\Requests\Dashboard\WaterStrategies;

final class WaterStrategyRequest
{

    public static function rules()
    {
        return  [
            'water_strategy.types_water_strategy_id'    => 'required|numeric',
            'water_strategy.year'                       => 'required|numeric|max:2050|min:1970',
            'water_strategy.state'                      => 'required|numeric',
            'water_strategy.housing_with_service'       => 'required|numeric',
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
