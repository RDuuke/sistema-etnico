<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\Communities;

use App\Utilities\ValidateRoles;

final class CommunityIndexController {
    
    public function __invoke() {
        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();
        
        return view('dashboard.communities.index');
    }
}
