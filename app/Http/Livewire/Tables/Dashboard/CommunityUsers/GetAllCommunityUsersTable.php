<?php

namespace App\Http\Livewire\Tables\Dashboard\CommunityUsers;

use App\Models\CommunityUser;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GetAllCommunityUsersTable extends LivewireDatatable
{
    const COMMUNITY = 3;
    const ROLE_COMMUNITY = 'community';
    const COMMUNITY_COORDINATOR = 4;
    const ROLE_COMMUNITY_COORDINATOR = 'community_coordinator';
    public $model = CommunityUser::class;

    public function builder() {
        return $this->model::query()
                ->join('community_community_user', 'community_users.id', 'community_community_user.user_id');
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
            Column::name('community_community_user.community_name')
                ->label(__('app.community')),
            Column::callback('id', function ($id) {
                $roleId = DB::table('model_has_roles')->where('model_id', $id)->first()->role_id;
                if ($roleId == self::COMMUNITY) {
                    return (__('app.' . self::ROLE_COMMUNITY));
                }
                if ($roleId == self::COMMUNITY_COORDINATOR) {
                    return (__('app.' . self::ROLE_COMMUNITY_COORDINATOR));
                }
            })
                ->label(__('app.platform_role')),

            Column::callback(['id'], function ($id) {
                return view('livewire.dashboard.community_users.actions.community_users-table-actions', ['id' => $id]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
