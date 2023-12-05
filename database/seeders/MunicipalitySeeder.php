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
            ['id' => '1', 'name' => 'Municipio 1'],
            ['id' => '2', 'name' => 'Municipio 2'],
            ['id' => '3', 'name' => 'Municipio 3'],
        ];

        Municipality::upsert($data, ['id'], ['name']);
    }
}
