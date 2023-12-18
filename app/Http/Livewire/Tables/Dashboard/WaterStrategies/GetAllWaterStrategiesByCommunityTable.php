<?php

namespace App\Http\Livewire\Tables\Dashboard\WaterStrategies;

use App\Models\WaterStrategy;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GetAllWaterStrategiesByCommunityTable extends LivewireDatatable
{
    public $model = WaterStrategy::class;
    public $community_id;

    public function builder() {
        return $this->model::query()
            ->where('community_id', $this->community_id);
    }

    public function columns() {
        return [
            Column::name('drinking_water')
            ->label(__('app.drinking_water')),
            
            Column::name('drinking_water_date')
            ->label(__('app.drinking_water_date')),

            Column::name('drinking_water_status')
            ->label(__('app.drinking_water_status')),

            Column::name('water_purification_system')
            ->label(__('app.water_purification_system')),

            Column::name('water_purification_system_date')
            ->label(__('app.water_purification_system_date')),

            Column::name('water_purification_system_status')
            ->label(__('app.water_purification_system_status')),

            Column::name('families_with_drinking_water')
            ->label(__('app.families_with_drinking_water')),

            Column::name('aqueduct')
            ->label(__('app.aqueduct')),

            Column::name('aqueduct_date')
            ->label(__('app.aqueduct_date')),

            Column::name('aqueduct_status')
            ->label(__('app.aqueduct_status')),

            Column::name('septic_tank_sewer')
            ->label(__('app.septic_tank_sewer')),

            Column::name('septic_tank_date')
            ->label(__('app.septic_tank_date')),
            
            Column::name('septic_tank_status')
            ->label(__('app.septic_tank_status')),

            Column::name('families_with_sewer')
            ->label(__('app.families_with_sewer')),

            // Column::callback(['id'], function ($id) {
            //     return view('livewire.dashboard.programs.actions.programs-table-actions', ['community_id' => $this->community_id, 'id' => $id]);
            // })
            //     ->label(__('app.actions'))
            //     ->unsortable()
        ];
    }
}
