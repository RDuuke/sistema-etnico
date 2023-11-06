<?php

namespace Database\Seeders;

use App\Models\TypeDocument;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'name' => 'Cédula'],
            ['id' => '2', 'name' => 'Cédula de extranjería'],
            ['id' => '3', 'name' => 'Pasaporte'],
        ];

        TypeDocument::upsert($data, ['id'], ['name']);
    }
}
