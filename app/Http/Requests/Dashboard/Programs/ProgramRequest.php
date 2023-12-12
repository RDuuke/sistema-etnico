<?php

namespace App\Http\Requests\Dashboard\Programs;

final class ProgramRequest
{

    public static function rules()
    {
        return  [
            'program.apply'                   => 'required',
            'program.unit_of_measurement'     => 'required',
            'program.amount_of_participants'  => 'required',
            'program.type_program_id'         => 'required|numeric',

            /**Optionals */
            'program.which'  => 'nullable|required_if:program.type_program_id,6',
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
