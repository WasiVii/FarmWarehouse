<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class WarehouseDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        Permission::firstOrCreate(['name' => 'view_warehouse', 'label' => 'View Warehouse', 'module' => 'Warehouse']);
        Permission::firstOrCreate(['name' => 'add_warehouse', 'label' => 'Add Warehouse', 'module' => 'Warehouse']);
        Permission::firstOrCreate(['name' => 'edit_warehouse', 'label' => 'Edit Warehouse', 'module' => 'Warehouse']);
        Permission::firstOrCreate(['name' => 'delete_warehouse', 'label' => 'Delete Warehouse', 'module' => 'Warehouse']);
    }
}
