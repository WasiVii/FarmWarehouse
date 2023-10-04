<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ProductStatusDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        Permission::firstOrCreate(['name' => 'view_product_status', 'label' => 'View Product Status', 'module' => 'Product Status']);
        Permission::firstOrCreate(['name' => 'add_product_status', 'label' => 'Add Product Status', 'module' => 'Product Status']);
        Permission::firstOrCreate(['name' => 'edit_product_status', 'label' => 'Edit Product Status', 'module' => 'Product Status']);
        Permission::firstOrCreate(['name' => 'delete_product_status', 'label' => 'Delete Product Status', 'module' => 'Product Status']);
    }
}
