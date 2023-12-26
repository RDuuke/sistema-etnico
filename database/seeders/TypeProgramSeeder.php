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
            ['id' => '2', 'name' => 'Mujeres tierra y vida'],
            ['id' => '3', 'name' => 'pagos por servicios ambientales'],
            ['id' => '4', 'name' => 'Ecoescuelas'],
            ['id' => '5', 'name' => 'Hogares Ecológicos'],
            ['id' => '6', 'name' => 'Mercados verdes'],
            ['id' => '7', 'name' => 'Piragüa'],
            ['id' => '8', 'name' => 'procesos de investigación para el fortalecimiento de saberes ancestrales y culturales'],
            ['id' => '9', 'name' => 'Acciones para la gestión de riesgos y la adaptación al cambio climático'],
        ];

        TypeProgram::upsert($data, ['id'], ['name']);
    }
}
