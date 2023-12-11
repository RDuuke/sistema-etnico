<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Communities;

use App\Models\Community;
use App\Utilities\ValidateRoles;

final class CommunityManageController
{
    public function __invoke(string $id)
    {
        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();
        $community = Community::find($id);

        $sections = [
            ['section' => 'Censo',     'route' => 'dashboard.census.index', 'params' => ['community_id' => $id]],
        ];

        return view('dashboard.communities.management', compact('community', 'sections'));
    }
}
