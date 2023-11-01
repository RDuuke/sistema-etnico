<?php

namespace App\Http\Livewire\Tables\Dashboard\Users;

use App\Models\User;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GetAllUsersTable extends LivewireDatatable
{
    public $model = User::class;

    public function columns()
    {
        return [
            Column::name('names')
                ->label(__('app.names')),
            Column::name('surnames')
                ->label(__('app.surnames')),
            Column::name('document')
                ->label(__('app.document')),
            Column::name('email')
                ->label(__('app.user')),
            Column::callback(['id'], function ($id) {
                return view('livewire.dashboard.users.actions.users-table-actions', ['id' => $id]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
