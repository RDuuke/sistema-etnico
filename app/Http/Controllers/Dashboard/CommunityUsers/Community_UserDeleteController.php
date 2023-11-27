<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\CommunityUsers;

use App\Models\CommunityUser;

use App\Models\PivotCommunityUser;
use App\Repository\CommunityUserRepository;
use App\Utilities\ValidateRoles;
use Exception;

final class Community_UserDeleteController {
    public function __construct(private CommunityUserRepository $repository)
    {
    }
    public function __invoke(string $id) {
        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();
        try {
            $user = CommunityUser::findOrFail($id);
            $current_community = PivotCommunityUser::where('user_id', $id)->first();
            $this->repository->delete($user);
            $this->repository->deleteUserToPivotCommunityUser($current_community);
            
            return redirect(route('dashboard.community-users.index'))->with('processResult', [
                'status' => 1,
                'message' => __('app.user_delete_successfully')
            ]);;
        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.user_delete_failure')
            ]);
        }
    }
}
