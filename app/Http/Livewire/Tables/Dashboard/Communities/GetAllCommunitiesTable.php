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

    public function builder() {
        $this->user = auth()->user();
        if (!is_null($this->user)) return $this->model::query()
            ->join('types_of_areas', 'communities.type_of_area_id', 'types_of_areas.id');

        $communities = PivotCommunityUser::where('user_id', auth()->guard('community')->user()->id)->pluck('community_id');

        return $this->model::query()
            ->join('types_of_areas', 'communities.type_of_area_id', 'types_of_areas.id')
            ->whereIn('communities.id', $communities);
    }

    public function columns() {
        return [
            Column::name('belongsToIndigenousVillage.name')
                ->label(__('app.village')),

            Column::name('name')
                ->label(__('app.name')),

            Column::name('belongsToMunicipality.name')
                ->label(__('app.municipality')),

            Column::name('belongsToDistrict.name')
                ->label(__('app.district')),

            Column::name('belongsToHamlet.name')
                ->label(__('app.hamlet')),

            Column::name('belongsToSubregion.name')
                ->label(__('app.subregion')),
                
            Column::name('belongsToTerritorial.name')
                ->label(__('app.territorial')),

            Column::callback(['id'], function ($id) {
                $administrator = is_null($this->user) ? false : true;
                return view('livewire.dashboard.communities.actions.communities-table-actions', ['id' => $id, 'administrator' => $administrator ]);
            })
                ->label(__('app.actions'))
                ->unsortable()
        ];
    }
}
