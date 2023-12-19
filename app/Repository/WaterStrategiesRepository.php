<?php

namespace App\Repository;

use App\Models\WaterStrategy;

final class WaterStrategiesRepository {
    private $model = WaterStrategy::class;

    public function create(WaterStrategy $data) : WaterStrategy {
        return $this->model::create([
            'community_id'                      => $data['community_id'],
            'drinking_water'                    => $data['drinking_water'],
            'drinking_water_date'               => $data['drinking_water_date'],
            'drinking_water_status'             => $data['drinking_water_status'],
            'water_purification_system'         => $data['water_purification_system'],
            'water_purification_system_date'    => $data['water_purification_system_date'],
            'water_purification_system_status'  => $data['water_purification_system_status'],
            'families_with_drinking_water'      => $data['families_with_drinking_water'],
            'aqueduct'                          => $data['aqueduct'],
            'aqueduct_date'                     => $data['aqueduct_date'],
            'aqueduct_status'                   => $data['aqueduct_status'],
            'families_with_aqueduct'            => $data['families_with_aqueduct'],
            'septic_tank_sewer'                 => $data['septic_tank_sewer'],
            'septic_tank_date'                  => $data['septic_tank_date'],
            'septic_tank_status'                => $data['septic_tank_status'],
            'families_with_sewer'               => $data['families_with_sewer'],
        ]);
    }

     public function update(string|int $id, WaterStrategy $data): WaterStrategy {
        $program = WaterStrategy::findOrFail($id);
        $program->update([
            'community_id'                      => $data['community_id'],
            'drinking_water'                    => $data['drinking_water'],
            'drinking_water_date'               => $data['drinking_water_date'],
            'drinking_water_status'             => $data['drinking_water_status'],
            'water_purification_system'         => $data['water_purification_system'],
            'water_purification_system_date'    => $data['water_purification_system_date'],
            'water_purification_system_status'  => $data['water_purification_system_status'],
            'families_with_drinking_water'      => $data['families_with_drinking_water'],
            'aqueduct'                          => $data['aqueduct'],
            'aqueduct_date'                     => $data['aqueduct_date'],
            'aqueduct_status'                   => $data['aqueduct_status'],
            'families_with_aqueduct'            => $data['families_with_aqueduct'],
            'septic_tank_sewer'                 => $data['septic_tank_sewer'],
            'septic_tank_date'                  => $data['septic_tank_date'],
            'septic_tank_status'                => $data['septic_tank_status'],
            'families_with_sewer'               => $data['families_with_sewer'],  
        ]);
        $program->refresh();
        return $program;
    }
}
