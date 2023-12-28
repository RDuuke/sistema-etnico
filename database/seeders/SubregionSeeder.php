<?php

namespace Database\Seeders;

use App\Models\Subregion;
use Illuminate\Database\Seeder;

class SubregionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'municipality_id' => '1', 'name' => 'Sub región 1', 'hamlet_id' => '1'],
            ['id' => '2', 'municipality_id' => '2', 'name' => 'Sub región 2', 'hamlet_id' => '2'],
            ['id' => '3', 'municipality_id' => '3', 'name' => 'Sub región 3', 'hamlet_id' => '3'],
        ];

        Subregion::upsert($data, ['id'], ['municipality_id'], ['name'], ['hamlet_id']);
            
    }
}
