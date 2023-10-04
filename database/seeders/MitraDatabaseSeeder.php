<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class MitraDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        Permission::firstOrCreate(['name' => 'view_mitra', 'label' => 'View Mitra', 'module' => 'Mitra']);
        Permission::firstOrCreate(['name' => 'add_mitra', 'label' => 'Add Mitra', 'module' => 'Mitra']);
        Permission::firstOrCreate(['name' => 'edit_mitra', 'label' => 'Edit Mitra', 'module' => 'Mitra']);
        Permission::firstOrCreate(['name' => 'delete_mitra', 'label' => 'Delete Mitra', 'module' => 'Mitra']);
    }
}
