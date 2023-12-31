<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Communities;

use App\Models\Community;
use App\Models\PivotCommunityUser;
use Exception;

final class CommunityDeleteController
{
    public function __invoke(string $id)
    {
        session(['actualSection' => 'communities']);
        $associate = PivotCommunityUser::where('community_id', $id)->first();
        try {

            if (!is_null($associate))
                return redirect(route('dashboard.communities.index'))->with('processResult', [
                    'status' => 0,
                    'message' => __('app.la comunidad tiene usuarios asociados, por lo cual no puede eliminarse')
                ]);

            $community = Community::findOrFail($id);
            $community->delete();

            return redirect(route('dashboard.communities.index'))->with('processResult', [
                'status' => 1,
                'message' => __('app.community_delete_successfully')
            ]);
        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.community_delete_failure')
            ]);
        }
    }
}
