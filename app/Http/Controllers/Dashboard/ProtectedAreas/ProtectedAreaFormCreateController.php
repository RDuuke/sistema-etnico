<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\ProtectedAreas;

use App\Models\Community;
use App\Utilities\ValidateRoles;

final class ProtectedAreaFormCreateController {
    
    public function __invoke(string $community_id) {

        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();

        $community = Community::find($community_id);

        return view('dashboard.communities.protected_areas.create_and_edit', compact('community'));

    }
}
