<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard;

final class DashboardController {

    public function __invoke() {
        return view('dashboard.welcome');
    }
}
