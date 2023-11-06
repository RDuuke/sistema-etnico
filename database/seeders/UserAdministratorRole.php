<?php

namespace Database\Seeders;

use App\Models\TypeDocument;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAdministratorRole extends Seeder
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
                'id' => '1',
                'names'  => 'Administrator',
                'surnames'  => 'Desarrollo',
                'document' => '1234567890',
                'email' => 'admin@corantioquia.gov.co',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ],
        ];

        User::upsert($data, ['id'], ['names', 'surnames', 'document', 'email', 'email_verified_at', 'password', 'remember_token']);
        $user = User::where('document', '1234567890')->first();
        $user->assignRole('dev');
    }
}
