<?php

namespace Database\Seeders;

use App\Models\Strategy;
use Illuminate\Database\Seeder;

class StrategySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'Guardianes'],
            ['id' => '2', 'name' => 'Mujeres tierra y vida'],
            ['id' => '3', 'name' => 'PSA'],
            ['id' => '4', 'name' => 'Etc'],
        ];

        Strategy::upsert($data, ['id'], ['name']);
    }
}
