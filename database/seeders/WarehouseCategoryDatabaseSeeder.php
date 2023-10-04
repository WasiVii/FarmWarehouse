<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class WarehouseCategoryDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        Permission::firstOrCreate(['name' => 'view_warehouse_category', 'label' => 'View Warehouse Category', 'module' => 'Warehouse Category']);
        Permission::firstOrCreate(['name' => 'add_warehouse_category', 'label' => 'Add Warehouse Category', 'module' => 'Warehouse Category']);
        Permission::firstOrCreate(['name' => 'edit_warehouse_category', 'label' => 'Edit Warehouse Category', 'module' => 'Warehouse Category']);
        Permission::firstOrCreate(['name' => 'delete_warehouse_category', 'label' => 'Delete Warehouse Category', 'module' => 'Warehouse Category']);
    }
}
