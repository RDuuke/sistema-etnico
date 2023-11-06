<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\Users;

use App\Http\Requests\Dashboard\User\UserUpdateRequest;
use App\Models\User;
use App\Repository\UserRepository;
use Exception;

final class UserUpdateController {

    public function __construct(private UserRepository $repository)
    {
    }

    public function __invoke(UserUpdateRequest $request, string $id)
    {
        $request->validated();

        try {
            $user = $this->repository->update($id, $request->all());
            $this->repository->syncRoles($user->getRoleNames()[0], $user); //TODO provisional
            
            return redirect(route('dashboard.users.index', ['user_id' => $id]))->with('processResult', [
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
