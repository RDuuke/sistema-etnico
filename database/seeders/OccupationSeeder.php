<?php

namespace Database\Seeders;

use App\Models\Occupation;
use Illuminate\Database\Seeder;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'Gobernador Mayor'],
            ['id' => '2', 'name' => 'Gobernador'],
            ['id' => '3', 'name' => 'Cacique'],
            ['id' => '4', 'name' => 'Presidente'],
            ['id' => '5', 'name' => 'Representante legal'],
            ['id' => '6', 'name' => 'Integrante de junta directiva'],
            ['id' => '7', 'name' => 'Docente'],
            ['id' => '8', 'name' => 'Promotor'],
            ['id' => '9', 'name' => 'Guardia'],
            ['id' => '10', 'name' => 'Líder'],
            ['id' => '11', 'name' => 'Promotor ecológico'],
            ['id' => '12', 'name' => 'Guardian de la naturaleza'],
            ['id' => '13', 'name' => 'Formador'],
            ['id' => '14', 'name' => 'Entre otros'],
        ];

        Occupation::upsert($data, ['id'], ['name']);
    }
}
