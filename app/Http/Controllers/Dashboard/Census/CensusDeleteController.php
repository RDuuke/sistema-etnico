<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Census;

use App\Models\Census;
use Exception;

final class CensusDeleteController {
    public function __invoke(string $community_id, string $id) {

        session(['actualSection' => 'communities']);
        try {

            $census = Census::findOrFail($id);
            $census->delete();
            
            return redirect(route('dashboard.census.index', ['community_id' => $community_id]))->with('processResult', [
                'status' => 1,
                'message' => __('app.census_delete_successfully')
            ]);;
        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.census_delete_failure')
            ]);
        }
    }
}
