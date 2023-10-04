<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ProductDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        Permission::firstOrCreate(['name' => 'view_product', 'label' => 'View Product', 'module' => 'Product']);
        Permission::firstOrCreate(['name' => 'add_product', 'label' => 'Add Product', 'module' => 'Product']);
        Permission::firstOrCreate(['name' => 'edit_product', 'label' => 'Edit Product', 'module' => 'Product']);
        Permission::firstOrCreate(['name' => 'delete_product', 'label' => 'Delete Product', 'module' => 'Product']);
    }
}
