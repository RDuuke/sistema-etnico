<?php

namespace Database\Seeders;

use App\Models\TrainingArea;
use Illuminate\Database\Seeder;

class TrainingAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'Área de formación 1'],
            ['id' => '2', 'name' => 'Área de formación 2'],
            ['id' => '3', 'name' => 'Área de formación 3'],
        ];

        TrainingArea::upsert($data, ['id'], ['name']);
    }
}
