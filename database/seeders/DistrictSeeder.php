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
            ['id' => '1', 'name' => 'Puerto Claver', 'municipality_id' => '1'],
            ['id' => '2', 'name' => 'San Juan de ité', 'municipality_id' => '2'],
            ['id' => '3', 'name' => 'San Pablo', 'municipality_id' => '3'],
        ];

        District::upsert($data, ['id'], ['name'], ['municipality_id']);
            
    }
}
