<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\Programs;

use App\Utilities\ValidateRoles;

final class ProgramsCreateAndEditController {
    
    public function __invoke(string $community_id, $id = null) {
        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();
        
        return view('dashboard.communities.programs.create_and_edit', compact('community_id', 'id'));
    }
}
