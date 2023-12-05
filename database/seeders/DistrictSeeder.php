<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'Corregimiento 1', 'municipality_id' => '1'],
            ['id' => '2', 'name' => 'Corregimiento 2', 'municipality_id' => '2'],
            ['id' => '3', 'name' => 'Corregimiento 3', 'municipality_id' => '3'],
        ];

        District::upsert($data, ['id'], ['name'], ['municipality_id']);
            
    }
}
