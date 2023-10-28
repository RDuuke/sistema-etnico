<?php

namespace App\Repository;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

final class UserRepository {
    private $model = User::class;

    public function create(array $data) : User {
        return $this->model::create([
            'names'      => ucwords(strtolower($data['names'])),
            'surnames'   => ucwords(strtolower($data['surnames'])),
            'document'   => $data['document'],
            'email'      => $data['email'],
            'password'   => Hash::make($data['document']),
        ]);
    }

    public function update(string $id, array $data): User {
        $user = User::findOrFail($id);
        $user->update([
            'names'      => ucwords(strtolower($data['names'])),
            'surnames'   => ucwords(strtolower($data['surnames'])),
            'document'   => $data['document'],
            'email'      => $data['email'],
            'password'   => Hash::make($data['document']),
        ]);
        $user->refresh();
        return $user;
    }

    public function assingRole(string $role_name, User $user): void {
        $role = Role::where('name', $role_name)->first();
        $user->syncRoles($role);
    }

    public function syncRoles(string $role_name, User $user): void {
        $role = Role::where('name', $role_name)->first();
        $user->syncRoles($role);
    }
}
