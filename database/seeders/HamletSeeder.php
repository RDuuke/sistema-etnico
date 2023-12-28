<?php

namespace Database\Seeders;

use App\Models\Hamlet;
use Illuminate\Database\Seeder;

class HamletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'municipality_id' => '1', 'name' => 'Puerto San Pedro', 'district_id' => '1'],
            ['id' => '2', 'municipality_id' => '2', 'name' => 'La Mirla y Nudillaes', 'district_id' => '2'],
            ['id' => '3', 'municipality_id' => '3', 'name' => 'Cruces', 'district_id' => '3'],
        ];

        Hamlet::upsert($data, ['id'], ['municipality_id'], ['name'], ['district_id']);
            
    }
}
