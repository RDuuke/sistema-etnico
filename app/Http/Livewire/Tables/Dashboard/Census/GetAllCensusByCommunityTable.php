<?php

namespace App\Http\Livewire\Tables\Dashboard\Census;

use App\Models\Census;
use App\Models\CommunityUser;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GetAllCensusByCommunityTable extends LivewireDatatable
{
    public $model = Census::class;
    public $community_id;

    public function builder() {
        return $this->model::query()
            ->where('community_id', $this->community_id);
    }

    public function columns() {
        return [
            Column::name('number_of_families')
                ->label(__('app.number_of_families')),

            Column::name('number_of_people')
                ->label(__('app.number_of_people')),

            Column::name('year')
                ->label(__('app.year')),

            Column::callback(['id'], function ($id) {
                return view('livewire.dashboard.census.actions.census-table-actions', ['community_id' => $this->community_id, 'id' => $id]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
