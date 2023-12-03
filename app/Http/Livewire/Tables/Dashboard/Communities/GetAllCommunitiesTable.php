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
            Column::name('types_of_areas.name')
                ->label(__('app.type_of_community')),
            Column::callback(['id'], function ($id) {
                return view('livewire.dashboard.communities.actions.communities-table-actions', ['id' => $id]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
