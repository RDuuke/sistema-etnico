<?php

declare(strict_types=1);
namespace App\Utilities;

use Illuminate\Support\Facades\Auth;

class ValidateRoles {
    public static function communityCoordinator()
    {
        if(Auth::user()) { 
            return true;
        } else {
            $roles = auth()->guard('community')->user()->getRoleNames();
            foreach ($roles as $role) {
                if ($role == 'community_coordinator') true;
                return true;
            }
        }

        return abort(403, 'No autorizado');
    }
}
