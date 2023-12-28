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
            ['id' => '1', 'municipality_id' => '1', 'name' => 'Territorial 1', 'subregion_id' => '1'],
            ['id' => '2', 'municipality_id' => '2', 'name' => 'Territorial 2', 'subregion_id' => '2'],
            ['id' => '3', 'municipality_id' => '3', 'name' => 'Territorial 3', 'subregion_id' => '3'],
        ];

        Territorial::upsert($data, ['id'], ['municipality_id'], ['name'], ['subregion_id']);
            
    }
}
