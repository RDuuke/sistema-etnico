<?php

namespace App\Repository;

use App\Models\Community;
use App\Models\CommunityUser;
use App\Models\PivotCommunityUser;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

final class CommunityUserRepository {
    private $model = CommunityUser::class;

    public function createPublic(array $data) : CommunityUser {
        return $this->model::create([
            'enable '              => $data['enable'],
            'names'                => ucwords(strtolower($data['names'])),
            'surnames'             => ucwords(strtolower($data['surnames'])),
            'type_document_id'     => $data['type_document_id'],
            'document'             => $data['document'],
            'age'                  => $data['age'],
            'gender_id'            => $data['gender_id'],
            'phone_1'              => $data['phone_1'],
            'phone_2'              => $data['phone_2'],
            'email'                => $data['email'],
            'educational_level_id' => $data['educational_level_id'],
            'training_area_id'     => $data['training_area_id'],
            'occupation_id'        => $data['occupation_id'],
            'strategy_id'          => $data['strategy_id'],
            'password'             => Hash::make($data['document']),
        ]);
    }

    public function create(array $data) : CommunityUser {
        return $this->model::create([
            'enable'               => $data['enable'],
            'names'                => ucwords(strtolower($data['names'])),
            'surnames'             => ucwords(strtolower($data['surnames'])),
            'type_document_id'     => $data['type_document_id'],
            'document'             => $data['document'],
            'age'                  => $data['age'],
            'gender_id'            => $data['gender_id'],
            'phone_1'              => $data['phone_1'],
            'phone_2'              => $data['phone_2'],
            'email'                => $data['email'],
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
            'educational_level_id' => $data['educational_level_id'],
            'training_area_id'     => $data['training_area_id'],
            'occupation_id'        => $data['occupation_id'],
            'strategy_id'          => $data['strategy_id'],
            'password'             => Hash::make($data['document']),
            'enable'               => $user['enable'],
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

    public function addCommunityToUser($communityId, CommunityUser $user) {   
        $model = new PivotCommunityUser();
        $community = Community::find($communityId);
        $model->insert([
            'community_id' => $community->id,
            'community_name' => $community->name,
            'user_id' => $user->id,
            'user_name' => $user->getFullNameAttribute(),
            'user_document' => $user->document,
            'user_email' => $user->email,
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ]);

        return 'successfully';
    }

    public function updateUserToPivotCommunityUser($community_id, $new_community, CommunityUser $user): void {
        $community         = Community::findOrFail($new_community);
        $current_community = PivotCommunityUser::find($community_id);

        $current_community->community_id    = $new_community;
        $current_community->community_name  = $community->name;
        $current_community->user_name       = $user->getFullNameAttribute();
        $current_community->user_document   = $user->document;
        $current_community->user_email      = $user->email;

        $current_community->update();
    }

    public function delete(CommunityUser $user): void {
        $user->delete();
    }

    public function deleteUserToPivotCommunityUser(PivotCommunityUser $pivotCommunityUser): void {
        $pivotCommunityUser->delete();
    }
}


