<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DiscountDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        Permission::firstOrCreate(['name' => 'view_discount', 'label' => 'View Discount', 'module' => 'Discount']);
        Permission::firstOrCreate(['name' => 'add_discount', 'label' => 'Add Discount', 'module' => 'Discount']);
        Permission::firstOrCreate(['name' => 'edit_discount', 'label' => 'Edit Discount', 'module' => 'Discount']);
        Permission::firstOrCreate(['name' => 'delete_discount', 'label' => 'Delete Discount', 'module' => 'Discount']);
    }
}
