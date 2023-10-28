<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Users;

use App\Models\User;
use Exception;

final class UserDeleteController {
    public function __invoke(string $id) {

        try {

            $user = User::findOrFail($id);
            $user->delete();
            
            return redirect(route('dashboard.users.index'))->with('processResult', [
                'status' => 1,
                'message' => __('app.user_delete_successfully')
            ]);;
        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                $e->getMessage(), 'message' => __('app.user_delete_failure')
            ]);
        }
    }
}
