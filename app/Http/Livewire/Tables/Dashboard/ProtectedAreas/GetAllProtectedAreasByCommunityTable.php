<?php

namespace App\Http\Livewire\Tables\Dashboard\ProtectedAreas;

use App\Models\Census;
use App\Models\ProtectedArea;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GetAllProtectedAreasByCommunityTable extends LivewireDatatable
{
    public $model = ProtectedArea::class;
    public $community_id;

    public function builder() {
        return $this->model::query()
            ->where('community_id', $this->community_id);
    }

    public function columns() {
        return [
            Column::name('year')
                ->label(__('app.year')),

            Column::name('protected_hectares')
                ->label(__('app.protected_hectares')),

            Column::name('payments_environmental_services')
                ->label(__('app.payments_environmental_services')),

            Column::callback(['id'], function ($id) {
                return view('livewire.dashboard.protected_areas.actions.protected_areas-table-actions', ['community_id' => $this->community_id, 'id' => $id]);

            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
