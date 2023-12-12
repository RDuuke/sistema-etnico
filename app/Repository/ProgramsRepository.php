<?php

namespace App\Repository;

use App\Models\Programs;

final class ProgramsRepository {
    private $model = Programs::class;

    public function create(Programs $data) : Programs {
        return $this->model::create([
            'apply'                  => $data['apply'],
            'unit_of_measurement'    => $data['unit_of_measurement'],           
            'amount_of_participants' => $data['amount_of_participants'],           
            'which'                  => $data['which'],           
            'community_id'           => $data['community_id'],           
            'type_program_id'        => $data['type_program_id'],           
        ]);
    }
}
