<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'Masculino'],
            ['id' => '2', 'name' => 'Femenino'],
        ];

        Gender::upsert($data, ['id'], ['name']);
    }
}
