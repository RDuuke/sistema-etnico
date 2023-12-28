<?php

namespace App\Repository;

use App\Models\WaterStrategy;

final class WaterStrategiesRepository {
    private $model = WaterStrategy::class;

    public function create(WaterStrategy $data) : WaterStrategy {
        return $this->model::create([
            'community_id'                      => $data['community_id'],
            'types_water_strategy_id'           => $data['types_water_strategy_id'],
            'year'                              => $data['year'],
            'state'                             => $data['state'],
            'housing_with_service'              => $data['housing_with_service'],
        ]);
    }

     public function update(string|int $id, WaterStrategy $data): WaterStrategy {
        $program = WaterStrategy::findOrFail($id);
        $program->update([
            'community_id'                      => $data['community_id'],
            'types_water_strategy_id'           => $data['types_water_strategy_id'],
            'year'                              => $data['year'],
            'state'                             => $data['state'],
            'housing_with_service'              => $data['housing_with_service'],
        ]);
        $program->refresh();
        return $program;
    }
}
