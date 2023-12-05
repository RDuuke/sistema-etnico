<?php

namespace App\Http\Livewire\Tables\Dashboard\Communities;

use App\Models\Community;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GetAllCommunitiesTable extends LivewireDatatable
{
    public $model = Community::class;

    public function builder() {
        return $this->model::query()
                ->join('types_of_areas', 'communities.type_of_area_id', 'types_of_areas.id');
    }

    public function columns() {
        return [
            Column::name('name')
                ->label(__('app.name')),
            Column::name('belongsToMunicipality.name')
                ->label(__('app.municipality')),

            Column::name('belongsToDistrict.name')
                ->label(__('app.district')),

            Column::name('belongsToHamlet.name')
                ->label(__('app.hamlet')),

            Column::name('belongsToSubregion.name')
                ->label(__('app.subregion')),
                
            Column::name('belongsToTerritorial.name')
                ->label(__('app.territorial')),

            Column::callback(['id'], function ($id) {
                return view('livewire.dashboard.communities.actions.communities-table-actions', ['id' => $id]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
