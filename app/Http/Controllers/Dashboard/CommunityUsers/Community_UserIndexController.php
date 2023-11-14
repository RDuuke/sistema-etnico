<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\CommunityUsers;

use App\Models\Community;
use App\Utilities\ValidateRoles;

final class Community_UserIndexController {
    
    public function __invoke() {
        ValidateRoles::communityCoordinator();
        $communities = count(Community::all());
        
        return view('dashboard.community_users.index', compact('communities'));
    }
}
