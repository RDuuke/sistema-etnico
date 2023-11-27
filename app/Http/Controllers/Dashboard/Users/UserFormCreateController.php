<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\Users;

final class UserFormCreateController {
    
    public function __invoke() {
        session(['actualSection' => 'users']);
        return view('dashboard.users.create_and_edit');   
    }
}
