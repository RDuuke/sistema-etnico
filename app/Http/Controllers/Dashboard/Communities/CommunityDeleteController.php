<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Communities;

use App\Models\Community;
<<<<<<< HEAD
use App\Models\PivotCommunityUser;
=======
>>>>>>> bitbcuket/main
use Exception;

final class CommunityDeleteController
{
    public function __invoke(string $id)
    {
<<<<<<< HEAD
        session(['actualSection' => 'communities']);
        $associate = PivotCommunityUser::where('community_id', $id)->first();
        try {

            if (!is_null($associate))
                return redirect(route('dashboard.communities.index'))->with('processResult', [
                    'status' => 0,
                    'message' => __('app.la comunidad tiene usuarios asociados, por lo cual no puede eliminarse')
                ]);
=======

        session(['actualSection' => 'communities']);
        try {
>>>>>>> bitbcuket/main

            $community = Community::findOrFail($id);
            $community->delete();

            return redirect(route('dashboard.communities.index'))->with('processResult', [
                'status' => 1,
                'message' => __('app.community_delete_successfully')
<<<<<<< HEAD
            ]);
=======
            ]);;
>>>>>>> bitbcuket/main
        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.community_delete_failure')
            ]);
        }
    }
}
