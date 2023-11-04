<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\Auth;

final class DashboardController {

    public function __invoke() {
        
        if (Auth::user()) {
            $userName = auth()->user()->names . ' ' . auth()->user()->surnames;
        } else {
            $userName = auth()->guard('community')->user()->names . ' ' . auth()->guard('community')->user()->surnames;
        }

        return view('dashboard.welcome', compact('userName'));
    }
}
