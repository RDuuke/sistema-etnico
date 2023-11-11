<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\CommunityUsers;

use App\Http\Requests\Dashboard\CommunityUsers\CommunityUserUpdateRequest;
use App\Repository\CommunityUserRepository;
use Exception;

final class Community_UserUpdateController {

    const COMMUNITY_ROLE = 'community';
    public function __construct(private CommunityUserRepository $repository)
    {
    }

    public function __invoke(CommunityUserUpdateRequest $request, string $id)
    {
        $request->validated();

        try {
            $role = $request->role;

            $community_user = $this->repository->update($id, $request->all());

            if (is_null($role)) {
                $this->repository->assingRole(self::COMMUNITY_ROLE, $community_user);
            } else {
                $this->repository->assingRole($role, $community_user);
            }
            
            return redirect(route('dashboard.community-users.index', ['user_id' => $id]))->with('processResult', [
                'status' => 1,
                'message' => __('app.user_update_successfully')
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.user_update_failure')
            ]);
        }
    }
}
