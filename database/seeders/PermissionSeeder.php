<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dev        = Role::where('name', 'dev')->first();
        $admin      = Role::where('name', 'administrator')->first();
        $community  = Role::where('name', 'community')->first();
        $commCoordinator  = Role::where('name', 'community')->first();
        /** USERS */
            Permission::updateOrCreate(['name' => 'users.index'])->syncRoles([$dev, $admin]);
            Permission::updateOrCreate(['name' => 'users.create'])->syncRoles([$dev, $admin]);
            Permission::updateOrCreate(['name' => 'users.store'])->syncRoles([$dev, $admin]);
            Permission::updateOrCreate(['name' => 'users.edit'])->syncRoles([$dev, $admin]);
            Permission::updateOrCreate(['name' => 'users.update'])->syncRoles([$dev, $admin]);
            Permission::updateOrCreate(['name' => 'users.delete'])->syncRoles([$dev, $admin]);
        /** USERS */
        
        
    }
}
