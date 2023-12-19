<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\WaterStrategies;

use App\Models\Programs;
use App\Models\WaterStrategy;
use Exception;

final class WaterStrategyDeleteController {
    public function __invoke(string $community_id, string $id) {

        session(['actualSection' => 'communities']);
        try {
            $waterStrategy = WaterStrategy::findOrFail($id);
            $waterStrategy->delete();
            
            return redirect(route('dashboard.water.index', ['community_id' => $community_id]))->with('processResult', [
                'status' => 1,
                'message' => __('app.water_strategy_delete_successfully')
            ]);;
        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.water_strategy_delete_failure')
            ]);
        }
    }
}
