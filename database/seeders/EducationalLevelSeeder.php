<?php

namespace Database\Seeders;

use App\Models\EducationalLevel;
use Illuminate\Database\Seeder;

class EducationalLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'Primaria'],
            ['id' => '2', 'name' => 'Secundaria'],
            ['id' => '3', 'name' => 'Tecnica'],
            ['id' => '4', 'name' => 'tecnológica'],
            ['id' => '5', 'name' => 'Pregrado'],
            ['id' => '6', 'name' => 'Postgrado'],
            ['id' => '7', 'name' => 'Otros'],
            ['id' => '8', 'name' => 'Ninguno'],
        ];

        EducationalLevel::upsert($data, ['id'], ['name']);
    }
}
