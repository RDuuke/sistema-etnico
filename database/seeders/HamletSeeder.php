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
            ['id' => '1', 'name' => 'Vereda 1', 'district_id' => '1'],
            ['id' => '2', 'name' => 'Vereda 2', 'district_id' => '2'],
            ['id' => '3', 'name' => 'Vereda 3', 'district_id' => '3'],
        ];

        Hamlet::upsert($data, ['id'], ['name'], ['district_id']);
            
    }
}
