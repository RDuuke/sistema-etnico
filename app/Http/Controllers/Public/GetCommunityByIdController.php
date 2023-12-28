<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Models\Community;

final class GetCommunityByIdController
{
    public function __invoke($id)
    {   
        $community = Community::findorFail($id);
        return view('publics.community', [
            'community' => $community
        ]);
    }
}
