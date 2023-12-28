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
            ->with('hasManyCensus')
            ->leftJoin('municipalities', 'communities.municipality_id', '=', 'municipalities.id') 
            ->leftJoin('districts', 'communities.district_id', '=', 'districts.id')
            ->leftJoin('hamlets', 'communities.hamlet_id', '=', 'hamlets.id')
            ->leftJoin('subregions', 'communities.subregion_id', '=', 'subregions.id')
            ->leftJoin('territorials', 'communities.territorial_id', '=', 'territorials.id')
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

            Column::name('belongsToHamlet.name')
                ->searchable()
                ->label(__('app.hamlet')),
                
            Column::name('belongsToTerritorial.name')
                ->searchable()
                ->label(__('app.territorial')),
            
            Column::callback(['id'], function ($id) {
                $administrator = false;
                return view('publics.livewire.tables.actions.communities-table-actions', ['id' => $id, 'administrator' => $administrator ]);
            })->label(__('app.actions'))->unsortable()
        ];
    }
}
