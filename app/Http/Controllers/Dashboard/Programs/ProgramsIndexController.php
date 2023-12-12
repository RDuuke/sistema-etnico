<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Programs;

use App\Models\Community;
use App\Models\Programs;
use App\Models\TypeProgram;
use App\Utilities\ValidateRoles;

final class ProgramsIndexController
{
    public function __invoke(string $community_id)
    {
        session(['actualSection' => 'communities']);
        ValidateRoles::communityCoordinator();

        $community = Community::find($community_id);
        $types_programs = TypeProgram::all()->count();
        $program = Programs::all()->count();
        $complete = $program == $types_programs ? true : false;

        return view('dashboard.communities.programs.index', compact('community', 'complete'));
    }
}
