<?php

namespace App\Http\Livewire\Tables\Dashboard\Communities;

use App\Models\Community;
use App\Models\PivotCommunityUser;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class GetAllCommunitiesPublicTable extends LivewireDatatable
{
    public $model = Community::class;
    public $type_community = 1;

    public function builder() {

        return $this->model::query()
            ->where('type_community', $this->type_community);
    }

    public function columns() {
        return [
            Column::name('name')
                ->searchable()
                ->label(__('app.name')),

            Column::name('belongsToMunicipality.name')
                ->searchable()
                ->label(__('app.municipality')),

            Column::name('belongsToDistrict.name')
                ->searchable()
                ->label(__('app.district')),

            Column::name('belongsToHamlet.name')
                ->searchable()
                ->label(__('app.hamlet')),

            Column::name('belongsToSubregion.name')
                ->searchable()
                ->label(__('app.subregion')),
                
            Column::name('belongsToTerritorial.name')
                ->searchable()
                ->label(__('app.territorial'))
        ];
    }
}
