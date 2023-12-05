<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\CommunityUsers;

use App\Http\Requests\Dashboard\CommunityUsers\CommunityUserCreateRequest;
use App\Repository\CommunityUserRepository;
use App\Utilities\CommunityUser\Functions_CommunityUser;
use App\Utilities\ValidateRoles;
use Exception;

final class Community_UserCreateController {

    const COMMUNITY_ROLE = 'community';
    const COORDINATOR_COMMUNITY_ROLE = 'community_coordinator';
    public function __construct(private CommunityUserRepository $repository)
    {}

    public function __invoke(CommunityUserCreateRequest $request) {
        session(['actualSection' => 'community_user']);
        ValidateRoles::communityCoordinator();
        $request->validated();


        try {
            $role = $request->role;
            $request['enable'] = 0;
            if (!is_null($role) && $role == SELF::COORDINATOR_COMMUNITY_ROLE) {
                $request['enable'] = 1;
            }
            
            Functions_CommunityUser::addCommunityUser($request->all(), $this->repository);
            
            return redirect(route('dashboard.community-users.index'))->with('processResult', [
                'status' => 1,
                'message' => __('app.user_create_successfully')
            ]);
            return redirect(route('dashboard.community-users.index'));

        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.user_create_failure')
            ]);

        }
    }
}