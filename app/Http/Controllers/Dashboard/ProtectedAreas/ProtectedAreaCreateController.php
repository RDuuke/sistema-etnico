<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\ProtectedAreas;

use App\Http\Requests\Dashboard\ProtectedAreas\ProtectedAreasCreateRequest;
use App\Repository\ProtectedAreaRepository;
use App\Utilities\ValidateRoles;
use Exception;

final class ProtectedAreaCreateController {

    public function __construct(private ProtectedAreaRepository $repository)
    {}

    public function __invoke(ProtectedAreasCreateRequest $request, $community_id) {
        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();
        $request->validated();

        try {
        $request['community_id'] = $community_id;
        $this->repository->create($request->all());
            return redirect(route('dashboard.protected-areas.index', ['community_id' => $community_id]))->with('processResult', [
                'status' => 1,
                'message' => __('app.census_create_successfully')
            ]);

        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.census_create_failure')
            ]);

        }
    }
}