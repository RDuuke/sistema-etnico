<?php

namespace App\Http\Livewire\Tables\Dashboard\Communities;

use App\Models\Community;
use App\Models\PivotCommunityUser;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GetAllCommunitiesTable extends LivewireDatatable
{
    public $model = Community::class;
    public $user;

    public function builder()
    {
        $this->user = auth()->user();
        if (!is_null($this->user)) return $this->model::query()
            ->join('types_of_areas', 'communities.type_of_area_id', 'types_of_areas.id');

        $communities = PivotCommunityUser::where('user_id', auth()->guard('community')->user()->id)->pluck('community_id');

        return $this->model::query()
            ->join('types_of_areas', 'communities.type_of_area_id', 'types_of_areas.id')
            ->whereIn('communities.id', $communities);
    }

    public function columns()
    {
        return [
            Column::name('type_community')
                ->callback(['type_community'], function ($type_community) {
                    return ($type_community == 1) ? 'Indígena' : 'Afro';
                })
                ->label(__('app.type_of_community')),

            Column::name('belongsToIndigenousVillage.name')
                ->callback(['belongsToIndigenousVillage.name'], function ($village) {
                    return ($village == "") ? 'No aplica' : $village;
                })
                ->label(__('app.village')),

            Column::name('reservation_name')
                ->callback(['reservation_name'], function ($reservation_name) {
                    return ($reservation_name == "") ? 'No aplica' : $reservation_name;
                })
                ->label(__('app.reservation_name')),

            Column::name('name')
                ->callback(['name'], function ($name) {
                    return ($name == "") ? 'No aplica' : $name;
                })
                ->label(__('app.name_community')),

            Column::name('belongsToMunicipality.name')
                ->label(__('app.municipality')),


            Column::name('belongsToSubregion.name')
                ->label(__('app.subregion')),

            Column::callback(['id'], function ($id) {
                $administrator = is_null($this->user) ? false : true;
                return view('livewire.dashboard.communities.actions.communities-table-actions', ['id' => $id, 'administrator' => $administrator]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
