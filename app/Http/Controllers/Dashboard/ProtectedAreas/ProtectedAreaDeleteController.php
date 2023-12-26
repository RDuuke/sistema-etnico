<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\ProtectedAreas;

use App\Models\ProtectedArea;
use Exception;

final class ProtectedAreaDeleteController {
    public function __invoke(string $community_id, string $id) {

        session(['actualSection' => 'communities']);
        try {

            $protected_area = ProtectedArea::findOrFail($id);
            $protected_area->delete();
            
            return redirect(route('dashboard.protected-areas.index', ['community_id' => $community_id]))->with('processResult', [
                'status' => 1,
                'message' => __('app.protected_area_delete_successfully')
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.protected_area_delete_failure')
            ]);
        }
    }
}
