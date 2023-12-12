<?php

namespace Database\Seeders;

use App\Models\TypeProgram;
use Illuminate\Database\Seeder;

class TypeProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'Guardianes de la Naturaleza'],
            ['id' => '2', 'name' => 'Ecoescuelas'],
            ['id' => '3', 'name' => 'Hogares Ecológicos'],
            ['id' => '4', 'name' => 'Piragüa'],
            ['id' => '5', 'name' => 'Mercados verdes'],
            ['id' => '6', 'name' => 'Otros. Cuales'],
        ];

        TypeProgram::upsert($data, ['id'], ['name']);
    }
}
