<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\CommunityUsers;

use App\Models\CommunityUser;
use App\Repository\CommunityUserRepository;
use App\Utilities\ValidateRoles;
use Exception;

final class Community_DisabledUserController {

    public function __construct(private CommunityUserRepository $repository)
    {}

    public function __invoke($id) {
        session(['actualSection' => 'community_user']);
        ValidateRoles::communityCoordinator();

        try {

            $this->repository->disabledCommunityUser(CommunityUser::find($id));

            return redirect(route('dashboard.community-users.index'))->with('processResult', [
                'status' => 1,
                'message' => __('app.user_disabled_successfully')
            ]);
            return redirect(route('dashboard.community-users.index'));

        } catch (Exception $e) {

            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.user_disabled_failure')
            ]);

        }
    }
}