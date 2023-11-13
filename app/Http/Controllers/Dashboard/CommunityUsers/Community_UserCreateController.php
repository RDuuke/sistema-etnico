<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\CommunityUsers;

use App\Http\Requests\Dashboard\CommunityUsers\CommunityUserCreateRequest;
use App\Repository\CommunityUserRepository;
use App\Utilities\CommunityUser\Functions_CommunityUser;
use App\Utilities\ValidateRoles;
use Exception;

final class Community_UserCreateController {

    public function __construct(private CommunityUserRepository $repository)
    {}

    public function __invoke(CommunityUserCreateRequest $request) {
        ValidateRoles::communityCoordinator();
        $request->validated();

        try {
            
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