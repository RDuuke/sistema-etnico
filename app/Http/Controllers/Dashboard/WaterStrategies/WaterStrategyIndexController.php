<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\WaterStrategies;

use App\Models\Community;
use App\Utilities\ValidateRoles;

final class WaterStrategyIndexController
{
    public function __invoke(string $community_id)
    {
        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();
        $community = Community::find($community_id);
        

        return view('dashboard.communities.water_strategies.index', compact('community'));
    }
}
