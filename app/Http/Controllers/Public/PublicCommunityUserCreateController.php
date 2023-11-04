<?php

declare(strict_types=1);
namespace App\Http\Controllers\Public;

use App\Http\Requests\Dashboard\CommunityUsers\PublicCommunityUserRequest;
use App\Repository\CommunityUserRepository;
use Exception;

final class PublicCommunityUserCreateController {


    const COMMUNITY_ROLE = 'community'; 

    public function __construct(private CommunityUserRepository $repository)
    {}

    public function __invoke(PublicCommunityUserRequest $request) {

        $request->validated();

        try {

            $rol = $request->rol;
            $community_user = $this->repository->createPublic($request->all());
            
            if(is_null($rol)) {
                $this->repository->assingRole(self::COMMUNITY_ROLE , $community_user);
            } else {
                $this->repository->assingRole($rol, $community_user);
            }
            
            
            return redirect(route('form-login'))->with('processResult', [
                'status' => 1,
                'message' => __('app.user_create_successfully')
            ]);
            
        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.user_create_failure')
            ]);
        }
    }
}