<?php

declare(strict_types=1);
namespace App\Http\Controllers\Public;

use App\Http\Requests\Dashboard\CommunityUsers\PublicCommunityUserRequest;
use App\Repository\CommunityUserRepository;
use App\Utilities\CommunityUser\Functions_CommunityUser;
use Exception;

final class PublicCommunityUserCreateController {


    const COMMUNITY_ROLE = 'community'; 

    public function __construct(private CommunityUserRepository $repository)
    {}

    public function __invoke(PublicCommunityUserRequest $request) {

        try {
        $request->validated();

            Functions_CommunityUser::publicAddCommunityUser($request->all(), $this->repository);

            return redirect(route('form-login'))->with('processResult', [
                'status' => 1,
                'message' => __('app.user_create_successfully')
            ]);
            
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect(route('form-login'))->with('processResult', [
                'status' => 0,
                'message' => __('app.user_create_failure')
            ]);
        }
    }
}