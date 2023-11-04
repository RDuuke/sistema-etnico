<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\CommunityUsers;

final class Community_UserIndexController {
    
    public function __invoke() {
        return view('dashboard.community_users.index');
    }
}
