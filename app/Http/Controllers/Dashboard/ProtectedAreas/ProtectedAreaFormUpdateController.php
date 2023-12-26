<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\ProtectedAreas;

use App\Models\Community;
use App\Models\ProtectedArea;
use App\Utilities\ValidateRoles;

final class ProtectedAreaFormUpdateController {
    
    public function __invoke(string $community_id, string $id) {

        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();

        $community = Community::find($community_id);
        $protected_area = ProtectedArea::find($id);

        return view('dashboard.communities.protected_areas.create_and_edit', compact('community', 'protected_area'));

    }
}
