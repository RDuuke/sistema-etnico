<?php

namespace App\Http\Livewire\Tables\Dashboard\Programs;

use App\Models\Programs;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GetAllProgramsByCommunityTable extends LivewireDatatable
{
    public $model = Programs::class;
    public $community_id;

    public function builder() {
        return $this->model::query()
            ->where('community_id', $this->community_id);
    }

    public function columns() {
        return [
            Column::name('belongsToTypeProgram.name')
            ->label(__('app.type_of_program')),

            Column::name('which')
            ->callback(['which', 'belongsToTypeProgram.name'], function ($which, $typeProgram) {
                return !empty($which) ? $which : $typeProgram;
            })
            ->label('¿' . __('app.which') . '?' ),

            Column::name('apply')
            ->callback(['apply'], function ($apply) {
                return !empty($apply) ? 'Si' : 'No';
            })
            ->label('¿' . __('app.apply') . '?'),

            Column::name('unit_of_measurement')
            ->label(__('app.unit_of_measurement')),

            Column::name('amount_of_participants')
            ->label(__('app.amount_of_participants')),

            Column::callback(['id'], function ($id) {
                return view('livewire.dashboard.programs.actions.programs-table-actions', ['community_id' => $this->community_id, 'id' => $id]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
