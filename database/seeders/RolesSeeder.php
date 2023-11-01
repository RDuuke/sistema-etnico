<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define los datos que deseas insertar o actualizar
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
                'name'       => 'general',
                'guard_name' => 'web',
            ],
        ];

        Role::upsert($data, ['id'], ['name', 'guard_name']);
    }

}
