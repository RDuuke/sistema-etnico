<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\Communities;

use App\Utilities\ValidateRoles;

final class CommunityIndexController {
    
    public function __invoke() {
        ValidateRoles::communityCoordinator();
        
        return view('dashboard.communities.index');
    }
}
