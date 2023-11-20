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
                ->join('type_of_communities', 'communities.type_community_id', 'type_of_communities.id');
    }

    public function columns() {
        return [
            Column::name('name')
                ->label(__('app.name')),
            Column::name('type_of_communities.name')
                ->label(__('app.type_of_community')),
            Column::callback(['id'], function ($id) {
                return view('livewire.dashboard.communities.actions.communities-table-actions', ['id' => $id]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
