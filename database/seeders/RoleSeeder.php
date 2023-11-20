<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id'         => '1',
                'name'       => 'dev',
                'guard_name' => 'web',
            ],
            [
                'id'         => '2',
                'name'       => 'administrator',
                'guard_name' => 'web',
            ],
            [
                'id'         => '3',
                'name'       => 'community',
                'guard_name' => 'community',
            ],
            [
                'id'         => '4',
                'name'       => 'community_coordinator',
                'guard_name' => 'community',
            ],
        ];

        Role::upsert($data, ['id'], ['name', 'guard_name']);
    }

}
