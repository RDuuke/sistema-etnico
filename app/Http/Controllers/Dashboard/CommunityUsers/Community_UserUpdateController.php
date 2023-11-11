<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\CommunityUsers;

use App\Http\Requests\Dashboard\CommunityUsers\CommunityUserUpdateRequest;
use App\Models\CommunityUser;
use App\Repository\CommunityUserRepository;
use App\Utilities\ValidateRoles;
use Exception;

final class Community_UserUpdateController {

    const COMMUNITY_ROLE = 'community';
    public function __construct(private CommunityUserRepository $repository)
    {
    }

    public function __invoke(CommunityUserUpdateRequest $request, string $id)
    {
        ValidateRoles::communityCoordinator();
        $request->validated();

        try {
            $userRole = $request->role;
            if (is_null($userRole)) {

                $user = CommunityUser::find($id);
                $rolesExistent = $user->getRoleNames();
                
                foreach ($rolesExistent as $role) {
                    if ($role == 'community') $userRole = 'community';
                    if ($role == 'community_coordinator') $userRole = 'community_coordinator';
                } //TODO momentáneamente para poder actualizar a un coordinador -- porque aun no se definen multiples roles para un usuario
            }

            $community_user = $this->repository->update($id, $request->all());
            $this->repository->assingRole($userRole, $community_user);

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
