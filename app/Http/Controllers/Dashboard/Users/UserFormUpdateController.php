<?php

declare(strict_types=1);
namespace App\Http\Controllers\Dashboard\Users;

use App\Models\User;

final class UserFormUpdateController {
    
    public function __invoke(string $id) {
        session(['actualSection' => 'users']);
        $user = User::findOrFail($id);
        return view('dashboard.users.create_and_edit', compact(['user']));
    }
}
