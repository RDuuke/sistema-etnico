<?php

declare(strict_types=1);

namespace App\Utilities\CommunityUser;

use App\Models\PivotCommunityUser;
use App\Repository\CommunityUserRepository;

final class Functions_CommunityUser {
    const COMMUNITY_ROLE = 'community';
    const COMMUNITY_COORDINATOR_ROLE = 'community_coordinator';
    const PENDING_ENABLEMENT = 0;
    const ENABLE_USER        = 1;

    public static function validatePivotCommunityUser($user, $new_community, CommunityUserRepository $repository) {
        
        $current_community = PivotCommunityUser::where('user_id', $user->id)->first();
        $repository->updateUserToPivotCommunityUser($current_community->id, $new_community, $user);
        return;

    }

    public static function addCommunityUser($request, CommunityUserRepository $repository) {
        
        isset($request['role']) ? $role = $request['role'] : $role = null;
        isset($request['role']) && $request['role'] == self::COMMUNITY_COORDINATOR_ROLE ? $request['enable'] = self::ENABLE_USER : $request['enable'] = self::PENDING_ENABLEMENT;
        
        $community_user = $repository->create($request);

        if (is_null($role)) {
            $repository->assingRole(self::COMMUNITY_ROLE, $community_user);
        } else {
            $repository->assingRole($role, $community_user);
        }

        $repository->addCommunityToUser($request['community_id'], $community_user);
        return;

    }
}
