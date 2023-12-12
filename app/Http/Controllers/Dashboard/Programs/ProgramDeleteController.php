<?php

declare(strict_types=1);

namespace App\Http\Controllers\Dashboard\Programs;

use App\Models\Census;
use App\Models\Programs;
use Exception;

final class ProgramDeleteController {
    public function __invoke(string $community_id, string $id) {

        session(['actualSection' => 'communities']);
        try {

            $program = Programs::findOrFail($id);
            $program->delete();
            
            return redirect(route('dashboard.programs.index', ['community_id' => $community_id]))->with('processResult', [
                'status' => 1,
                'message' => __('app.program_delete_successfully')
            ]);;
        } catch (Exception $e) {
            return redirect()->back()->with('processResult', [
                'status' => 0,
                'message' => __('app.program_delete_failure')
            ]);
        }
    }
}
