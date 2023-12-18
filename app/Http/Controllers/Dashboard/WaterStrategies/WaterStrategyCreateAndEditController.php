<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\WaterStrategies;

use App\Utilities\ValidateRoles;

final class WaterStrategyCreateAndEditController {
    
    public function __invoke(string $community_id, $id = null) {
        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();
        
        dd(WaterStrategyCreateAndEditController::class);
        return view('dashboard.communities.water_strategies.create_and_edit', compact('community_id', 'id'));
    }
}
