<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\Census;

use App\Http\Requests\Dashboard\Census\CensusCreateRequest;
use App\Repository\CensusRepository;
use App\Utilities\ValidateRoles;
use Exception;

final class CensusCreateController {

    public function __construct(private CensusRepository $repository)
    {}

    public function __invoke(CensusCreateRequest $request, $community_id) {

        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();
        $request->validated();

        try {
        $request['community_id'] = $community_id;
        $this->repository->create($request->all());
            return redirect(route('dashboard.census.index', ['community_id' => $community_id]))->with('processResult', [
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