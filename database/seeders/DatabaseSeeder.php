<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AppDatabaseSeeder::class,
            DiscountDatabaseSeeder::class,
            KlienDatabaseSeeder::class,
            MitraDatabaseSeeder::class,
            ProductCategoryDatabaseSeeder::class,
            ProductDatabaseSeeder::class,
            ProductStatusDatabaseSeeder::class,
            RolesDatabaseSeeder::class,
            SettingsDatabaseSeeder::class,
            UserDatabaseSeeder::class,
            WarehouseDatabaseSeeder::class,
            WarehouseCategoryDatabaseSeeder::class,
        ]);
    }
}
