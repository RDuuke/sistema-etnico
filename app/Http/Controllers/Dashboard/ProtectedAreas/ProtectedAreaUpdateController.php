<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\ProtectedAreas;

use App\Http\Requests\Dashboard\ProtectedAreas\ProtectedAreasUpdateRequest;
use App\Repository\ProtectedAreaRepository;
use App\Utilities\ValidateRoles;
use Exception;

final class ProtectedAreaUpdateController {

    public function __construct(private ProtectedAreaRepository $repository)
    {}

    public function __invoke(ProtectedAreasUpdateRequest $request, string $community_id, string $id) {

        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();
        $request->validated();
        
        try {
            $this->repository->update($id, $request->all());
            
            return redirect(route('dashboard.protected-areas.index', ['community_id' => $community_id]))->with('processResult', [
                'status' => 1,
                'message' => __('app.protected_area_update_successfully')
            ]);

        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.protected_area_update_failure')
            ]);

        }
    }
}