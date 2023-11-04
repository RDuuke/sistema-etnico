<?php

namespace App\Http\Livewire\Tables\Dashboard\CommunityUsers;

use App\Models\CommunityUser;

use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GetAllCommunityUsersTable extends LivewireDatatable
{
    public $model = CommunityUser::class;

    public function builder() {
        return $this->model::query();
    }

    public function columns() {
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
                return view('livewire.dashboard.community_users.actions.community_users-table-actions', ['id' => $id]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
