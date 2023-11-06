<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;

use App\Models\{
    Community,
    EducationalLevel,
    Gender,
    Occupation,
    Strategy,
    TrainingArea,
    TypeDocument,
};

final class RegisterUserFormController extends Controller
{
    public function __invoke()
    {
        $types_documents    = TypeDocument::all();
        $genders            = Gender::all();
        $communities        = Community::all();
        $educational_levels = EducationalLevel::all();
        $training_areas     = TrainingArea::all();
        $occupations        = Occupation::all();
        $strategies         = Strategy::all();

        return view('publics.register', compact('types_documents', 'genders', 'communities', 'educational_levels', 'training_areas', 'occupations', 'strategies'));
    }
}
