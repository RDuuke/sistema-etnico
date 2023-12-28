<?php

namespace Database\Seeders;

use App\Models\Territorial;
use Illuminate\Database\Seeder;

class TerritorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'municipality_id' => '1', 'name' => 'Panzenú', 'subregion_id' => '1'],
            ['id' => '2', 'municipality_id' => '2', 'name' => 'Zenufaná', 'subregion_id' => '2'],
            ['id' => '3', 'municipality_id' => '3', 'name' => 'Cartama', 'subregion_id' => '3'],
        ];

        Territorial::upsert($data, ['id'], ['municipality_id'], ['name'], ['subregion_id']);
            
    }
}
