<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\Census;

use App\Http\Requests\Dashboard\Census\CensusUpdateRequest;
use App\Repository\CensusRepository;
use App\Utilities\ValidateRoles;
use Exception;

final class CensusUpdateController {

    public function __construct(private CensusRepository $repository)
    {}

    public function __invoke(CensusUpdateRequest $request, string $community_id, string $id) {

        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();
        $request->validated();
        
        try {
            $this->repository->update($id, $request->all());
            
            return redirect(route('dashboard.census.index', ['community_id' => $community_id]))->with('processResult', [
                'status' => 1,
                'message' => __('app.census_update_successfully')
            ]);

        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.census_update_failure')
            ]);

        }
    }
}