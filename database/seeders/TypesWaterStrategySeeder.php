<?php

namespace Database\Seeders;

use App\Models\TypeProgram;
use App\Models\TypeWaterStrategy;
use Illuminate\Database\Seeder;

class TypesWaterStrategySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'Acueducto'],
            ['id' => '2', 'name' => 'Agua potable'],
            ['id' => '3', 'name' => 'Alcantarillado'],
            ['id' => '4', 'name' => 'Energía solar'],
            ['id' => '5', 'name' => 'Plantas de tratamiento'],
            ['id' => '6', 'name' => 'Recolección de residuos'],
            ['id' => '7', 'name' => 'Pozos sépticos'],
        ];

        TypeWaterStrategy::upsert($data, ['id'], ['name']);
    }
}
