<?php

namespace App\Repository;

use App\Models\Census;

final class CensusRepository {
    private $model = Census::class;

    public function create(array $data) : Census {
        return $this->model::create([
            'number_of_families'    => $data['number_of_families'],
            'number_of_people'      => $data['number_of_people'],
            'year'                  => $data['year'],
            'community_id'          => $data['community_id'],
        ]);

    }

}


