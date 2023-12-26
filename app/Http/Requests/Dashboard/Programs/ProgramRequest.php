<?php

namespace App\Http\Requests\Dashboard\Programs;

final class ProgramRequest
{

    public static function rules()
    {
        return  [
            'program.year'                    => 'required|numeric|max:2050|min:1970',
            'program.type_program_id'         => 'required|numeric',
            'program.apply'                   => 'required',
            'program.unit_of_measurement'     => 'nullable|required_if:program.apply,true',
            'program.amount_of_participants'  => 'nullable|required_if:program.apply,true',
            'program.observations'            => 'nullable',



            /**Optionals */
            'program.which'  => 'nullable|required_if:program.type_program_id,6',
        ];
    }

    public static function messages()
    {
        return [
            'max'           => 'El campo no puede tener más de 255 caracteres',
            'required'      => 'El campo es requerido',
            'required_if'   => 'El campo es requerido',
            'numeric'       => 'El campo es requerido',
            'program.year.numeric'  => 'El año debe ser numérica entre 1970 y 2050',
            'program.year.min'      => 'El año mínima es 1970',
            'program.year.max'      => 'El año máxima es 2050',
        ];
    }
}
