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
            ->callback(['drinking_water'], function ($drinking_water) {
                return $drinking_water == 1 ? 'Si' : 'No';
            })
            ->label(__('app.drinking_water')),
            
            Column::name('drinking_water_date')
            ->label(__('app.drinking_water_date')),

            Column::name('drinking_water_status')
            ->callback(['drinking_water_status'], function ($drinking_water_status) {
                return $drinking_water_status == 0 ? 'Sin acceso' : ($drinking_water_status == 1 ? 'Agua potable' : 'No aplica');
            })
            ->label(__('app.drinking_water_status')),

            Column::name('water_purification_system')
            ->callback(['water_purification_system'], function ($water_purification_system) {
                return $water_purification_system == 1 ? 'Si' : 'No';
            })
            ->label(__('app.water_purification_system')),

            Column::name('water_purification_system_date')
            ->label(__('app.water_purification_system_date')),

            Column::name('water_purification_system_status')
            ->callback(['water_purification_system_status'], function ($water_purification_system_status) {
                return $water_purification_system_status == 0 ? 'Sin acceso' : ($water_purification_system_status == 1 ? 'Acueducto' : 'No aplica');
            })
            ->label(__('app.water_purification_system_status')),

            Column::name('families_with_drinking_water')
            ->label(__('app.families_with_drinking_water')),

            Column::name('aqueduct')
            ->callback(['aqueduct'], function ($aqueduct) {
                return $aqueduct == 1 ? 'Si' : 'No';
            })
            ->label(__('app.aqueduct')),

            Column::name('aqueduct_date')
            ->label(__('app.aqueduct_date')),

            Column::name('aqueduct_status')
            ->callback(['aqueduct_status'], function ($aqueduct_status) {
                return $aqueduct_status == 0 ? 'Sin acceso' : ($aqueduct_status == 1 ? 'Acueducto' : 'No aplica');
            })
            ->label(__('app.aqueduct_status')),

            Column::name('families_with_aqueduct')
            ->label(__('app.families_with_aqueduct')),

            Column::name('septic_tank_sewer')
            ->callback(['septic_tank_sewer'], function ($septic_tank_sewer) {
                return $septic_tank_sewer == 1 ? 'Si' : 'No';
            })
            ->label(__('app.septic_tank_sewer')),

            Column::name('septic_tank_date')
            ->label(__('app.septic_tank_date')),
            
            Column::name('septic_tank_status')
            ->callback(['septic_tank_status'], function ($septic_tank_status) {
                return $septic_tank_status == 0 ? 'Sin acceso' : ($septic_tank_status == 1 ? 'Acueducto' : 'No aplica');
            })
            ->label(__('app.septic_tank_status')),

            Column::name('families_with_sewer')
            ->label(__('app.families_with_sewer')),

            Column::callback(['id'], function ($id) {
                return view('livewire.dashboard.water_strategy.actions.water_strategy-table-actions', ['community_id' => $this->community_id, 'id' => $id]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
