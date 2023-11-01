<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\Users;

final class UsersIndexController {
    
    public function __invoke() {
        return view('dashboard.users.index');
    }
}
