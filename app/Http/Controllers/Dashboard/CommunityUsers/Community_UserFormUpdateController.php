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
        return view('dashboard.community_users.create_and_edit', compact(['types_documents','genders','communities','educational_levels','training_areas','occupations','strategies', 'community_user']));
    }
}
