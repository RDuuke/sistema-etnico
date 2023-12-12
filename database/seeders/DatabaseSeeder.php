<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                RoleSeeder::class,
                TypeDocumentSeeder::class,
                GenderSeeder::class,
                EducationalLevelSeeder::class,
                TrainingAreaSeeder::class,
                TypeAreaSeeder::class,
                OccupationSeeder::class,
                StrategySeeder::class,
                PermissionSeeder::class,
                UserAdministratorRole::class,
                MunicipalitySeeder::class,
                DistrictSeeder::class,
                HamletSeeder::class,
                SubregionSeeder::class,
                TerritorialSeeder::class,
                TypeProgramSeeder::class,
            ]
        );
    }
}
