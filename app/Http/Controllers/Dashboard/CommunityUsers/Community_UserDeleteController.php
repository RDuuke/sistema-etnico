<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\CommunityUsers;

use App\Models\CommunityUser;
use Exception;

final class Community_UserDeleteController {
    public function __invoke(string $id) {

        try {
            $user = CommunityUser::findOrFail($id);
            $user->delete();
            
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
