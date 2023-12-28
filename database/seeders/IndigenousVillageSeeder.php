<?php

namespace Database\Seeders;

use App\Models\IndigenousVillage;
use Illuminate\Database\Seeder;

class IndigenousVillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'Embera Eyabida'],
            ['id' => '2', 'name' => 'Embera Chamí'],
            ['id' => '3', 'name' => 'Nutabe'],
            ['id' => '4', 'name' => 'Senú'],
        ];

        IndigenousVillage::upsert($data, ['id'], ['name']);
    }
}
