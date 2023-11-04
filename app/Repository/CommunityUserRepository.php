<?php

namespace App\Repository;

use App\Models\CommunityUser;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

final class CommunityUserRepository {
    private $model = CommunityUser::class;

    public function createPublic(array $data) : CommunityUser {
        return $this->model::create([
            'names'                => ucwords(strtolower($data['names'])),
            'surnames'             => ucwords(strtolower($data['surnames'])),
            'type_document_id'     => $data['type_document_id'],
            'document'             => $data['document'],
            'age'                  => $data['age'],
            'gender_id'            => $data['gender_id'],
            'phone_1'              => $data['phone_1'],
            'phone_2'              => $data['phone_2'],
            'email'                => $data['email'],
            'community_id'         => $data['community_id'],
            'educational_level_id' => $data['educational_level_id'],
            'training_area_id'     => $data['training_area_id'],
            'occupation_id'        => $data['occupation_id'],
            'strategy_id'          => $data['strategy_id'],
            'password'             => Hash::make($data['document']),
        ]);
    }

    public function create(array $data) : CommunityUser {
        return $this->model::create([
            'names'                => ucwords(strtolower($data['names'])),
            'surnames'             => ucwords(strtolower($data['surnames'])),
            'type_document_id'     => $data['type_document_id'],
            'document'             => $data['document'],
            'age'                  => $data['age'],
            'gender_id'            => $data['gender_id'],
            'phone_1'              => $data['phone_1'],
            'phone_2'              => $data['phone_2'],
            'email'                => $data['email'],
            'community_id'         => $data['community_id'],
            'educational_level_id' => $data['educational_level_id'],
            'training_area_id'     => $data['training_area_id'],
            'occupation_id'        => $data['occupation_id'],
            'strategy_id'          => $data['strategy_id'],
            'password'             => Hash::make($data['document']),
        ]);
    }

    public function update(string $id, array $data): CommunityUser {
        $user = CommunityUser::findOrFail($id);
        $user->update([
            'names'                => ucwords(strtolower($data['names'])),
            'surnames'             => ucwords(strtolower($data['surnames'])),
            'type_document_id'     => $data['type_document_id'],
            'document'             => $data['document'],
            'age'                  => $data['age'],
            'gender_id'            => $data['gender_id'],
            'phone_1'              => $data['phone_1'],
            'phone_2'              => $data['phone_2'],
            'email'                => $data['email'],
            'community_id'         => $data['community_id'],
            'educational_level_id' => $data['educational_level_id'],
            'training_area_id'     => $data['training_area_id'],
            'occupation_id'        => $data['occupation_id'],
            'strategy_id'          => $data['strategy_id'],
            'password'             => Hash::make($data['document']),
        ]);
        $user->refresh();
        return $user;
    }

    public function assingRole(string $role_name, CommunityUser $community_user): void {
        $role = Role::where('name', $role_name)->first();
        $community_user->syncRoles($role);
    }

    public function syncRoles(string $role_name, CommunityUser $community_user): void {
        $role = Role::where('name', $role_name)->first();
        $community_user->syncRoles($role);
    }
}
