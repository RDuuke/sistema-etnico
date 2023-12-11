<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\Census;

use App\Models\Census;
use App\Models\Community;
use App\Utilities\ValidateRoles;

final class CensusFormUpdateController {
    
    public function __invoke(string $community_id, string $id) {

        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();

        $community = Community::find($community_id);
        $community_census = Census::find($id);

        return view('dashboard.communities.census.create_and_edit', compact('community', 'community_census'));

    }
}
