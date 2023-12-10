<?php

declare(strict_types=1);

namespace App\Utilities\CommunityUser;

use App\Models\PivotCommunityUser;
use App\Repository\CommunityUserRepository;

final class Functions_CommunityUser {
    public static function validatePivotCommunityUser($user, $new_community, CommunityUserRepository $repository) {
        
        $current_community = PivotCommunityUser::where('user_id', $user->id)->first();
        $repository->updateUserToPivotCommunityUser($current_community->id, $new_community, $user);
        return;

    }

    public static function publicAddCommunityUser($request, CommunityUserRepository $repository) {

        isset($request['role']) ? $role = $request['role'] : $role = null;

        $request['enable'] = Constants::PENDING_ENABLEMENT;

        $community_user = $repository->createPublic($request);

        if (is_null($role)) {
            $repository->assingRole(Constants::COMMUNITY_ROLE, $community_user);
        } else {
            $repository->assingRole($role, $community_user);
        }

        $repository->addCommunityToUser($request['community_id'], $community_user);
        return;

    }

    public static function addCommunityUser($request, CommunityUserRepository $repository) {

        isset($request['role']) ? $role = $request['role'] : $role = null;
        isset($request['role']) && $request['role'] == Constants::COMMUNITY_COORDINATOR_ROLE ? $request['enable'] = Constants::ENABLE_USER : $request['enable'] = Constants::PENDING_ENABLEMENT;
        
        $community_user = $repository->create($request);

        if (is_null($role)) {
            $repository->assingRole(Constants::COMMUNITY_ROLE, $community_user);
        } else {
            $repository->assingRole($role, $community_user);
        }

        $repository->addCommunityToUser($request['community_id'], $community_user);
        return;

    }
}
