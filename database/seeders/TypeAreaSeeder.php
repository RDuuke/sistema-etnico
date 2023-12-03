<?php

namespace Database\Seeders;

use App\Models\TypeArea;
use Illuminate\Database\Seeder;

class TypeAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'Titulo colectivo'],
            ['id' => '2', 'name' => 'Baldíos'],
            ['id' => '3', 'name' => 'Posesión'],
            ['id' => '4', 'name' => 'Comodato'],
            ['id' => '5', 'name' => 'Predios privados de familias de la comunidad'],
            ['id' => '6', 'name' => 'otros '],
        ];

        TypeArea::upsert($data, ['id'], ['name']);
    }
}
