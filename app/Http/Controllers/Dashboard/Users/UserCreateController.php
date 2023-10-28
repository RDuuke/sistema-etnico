<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\Users;

use App\Http\Requests\Dashboard\User\UserCreateRequest;
use App\Repository\UserRepository;
use Exception;

final class UserCreateController {

    public function __construct(private UserRepository $repository)
    {}

    public function __invoke(UserCreateRequest $request) {

        $request->validated();
        try {

            $user = $this->repository->create($request->all());
            $this->repository->assingRole('general', $user); //TODO Provisionalmente
            
            return redirect(route('dashboard.users.index'))->with('processResult', [
                'status' => 1,
                'message' => __('app.user_create_successfully')
            ]);
            return redirect(route('dashboard.users.index'));

        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                $e->getMessage(), 'message' => __('app.user_create_failure')
            ]);
        }
    }
}