<?php

namespace App\Http\Livewire\Tables\Dashboard\Programs;

use App\Models\Programs;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GetAllProgramsByCommunityTable extends LivewireDatatable
{
    public $model = Programs::class;
    public $community_id;
    const DOES_NOT_APPLY = 'No aplica';

    public function builder() {
        return $this->model::query()
            ->where('community_id', $this->community_id);
    }

    public function columns() {
        return [
            Column::name('year')
            ->label(__('app.year')),

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
            ->callback(['unit_of_measurement'], function ($unit_of_measurement) {
                return !empty($unit_of_measurement) ? $unit_of_measurement : self::DOES_NOT_APPLY;
            })
            ->label(__('app.unit_of_measurement')),

            Column::name('amount_of_participants')
            ->callback(['amount_of_participants'], function ($amount_of_participants) {
                return !empty($amount_of_participants) ? $amount_of_participants : self::DOES_NOT_APPLY;
            })
            ->label(__('app.amount_of_participants')),

            Column::name('observations')
            ->callback(['observations'], function ($observations) {
                return !empty($observations) ? $observations : self::DOES_NOT_APPLY;
            })
            ->label(__('app.observations')),

            Column::callback(['id'], function ($id) {
                return view('livewire.dashboard.programs.actions.programs-table-actions', ['community_id' => $this->community_id, 'id' => $id]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
