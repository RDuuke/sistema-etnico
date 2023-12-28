<?php

namespace App\Http\Livewire\Tables\Dashboard\WaterStrategies;

use App\Models\WaterStrategy;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GetAllWaterStrategiesByCommunityTable extends LivewireDatatable
{
    public $model = WaterStrategy::class;
    public $community_id;

    public function builder()
    {
        return $this->model::query()
            ->where('community_id', $this->community_id);
    }

    public function columns()
    {
        return [

            Column::name('belongsToTypeWaterStrategy.name')
                ->label(__('app.type_of_strategy')),

            Column::name('year')
                ->label(__('app.year')),

            Column::name('state')
                ->callback(['state'], function ($state) {
                    return ($state == 0) ? 'Bueno' : (($state == 1) ? 'Regular' : 'Malo');
                })
                ->label(__('app.state')),

            Column::name('housing_with_service')
                ->label(__('app.housing_with_service')),

            Column::callback(['id'], function ($id) {
                return view('livewire.dashboard.water_strategy.actions.water_strategy-table-actions', ['community_id' => $this->community_id, 'id' => $id]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
