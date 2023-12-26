<?php

namespace App\Repository;

use App\Models\ProtectedArea;

final class ProtectedAreaRepository {
    private $model = ProtectedArea::class;

    public function create(array $data) : ProtectedArea {
        return $this->model::create([
            'year'                              => $data['year'],
            'protected_hectares'                => $data['protected_hectares'],
            'payments_environmental_services'   => $data['payments_environmental_services'],
            'community_id'                      => $data['community_id'],
        ]);
    }

    public function update(string $id, array $data): ProtectedArea {
        $census = ProtectedArea::findOrFail($id);
        $census->update([
            'year'                              => $data['year'],
            'protected_hectares'                => $data['protected_hectares'],
            'payments_environmental_services'   => $data['payments_environmental_services'],
            'community_id'                      => $census['community_id'],
        ]);
        $census->refresh();
        return $census;
    }


}