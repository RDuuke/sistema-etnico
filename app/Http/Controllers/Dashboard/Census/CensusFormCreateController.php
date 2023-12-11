<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\Census;

use App\Models\Community;
use App\Utilities\ValidateRoles;

final class CensusFormCreateController {
    
    public function __invoke(string $community_id) {
        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();

        $community = Community::find($community_id);

        return view('dashboard.communities.census.create_and_edit', compact('community'));

    }
}
