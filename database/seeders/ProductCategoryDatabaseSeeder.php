<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ProductCategoryDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        Permission::firstOrCreate(['name' => 'view_product_category', 'label' => 'View Product Category', 'module' => 'Product Category']);
        Permission::firstOrCreate(['name' => 'add_product_category', 'label' => 'Add Product Category', 'module' => 'Product Category']);
        Permission::firstOrCreate(['name' => 'edit_product_category', 'label' => 'Edit Product Category', 'module' => 'Product Category']);
        Permission::firstOrCreate(['name' => 'delete_product_category', 'label' => 'Delete Product Category', 'module' => 'Product Category']);
    }
}
