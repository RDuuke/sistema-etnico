<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'El Bagre'],
            ['id' => '2', 'name' => 'Remedios'],
            ['id' => '3', 'name' => 'Támesis'],
        ];

        Municipality::upsert($data, ['id'], ['name']);
    }
}
