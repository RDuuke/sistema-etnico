<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\CommunityUsers;

use App\Models\{
    Community,
    CommunityUser,
    EducationalLevel,
    Gender,
    Occupation,
    Strategy,
    TrainingArea,
    TypeDocument,
};
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

final class Community_UserFormUpdateController {
    public function __invoke(string $id) {
        $community_user     = CommunityUser::findOrFail($id);
        $types_documents    = TypeDocument::all();
        $genders            = Gender::all();
        $communities        = Community::all();
        $educational_levels = EducationalLevel::all();
        $training_areas     = TrainingArea::all();
        $occupations        = Occupation::all();
        $strategies         = Strategy::all();
        $roles              = Role::where('guard_name', 'community')->get(['id', 'name']);
        $guardWeb           = false;

        if (Auth::user()) $guardWeb = true; 

        return view('dashboard.community_users.create_and_edit', compact(['types_documents','genders','communities','educational_levels','training_areas','occupations','strategies', 'community_user', 'roles', 'guardWeb']));
    }
}
