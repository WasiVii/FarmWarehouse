<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class KlienDatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        Permission::firstOrCreate(['name' => 'view_klien', 'label' => 'View Klien', 'module' => 'Klien']);
        Permission::firstOrCreate(['name' => 'add_klien', 'label' => 'Add Klien', 'module' => 'Klien']);
        Permission::firstOrCreate(['name' => 'edit_klien', 'label' => 'Edit Klien', 'module' => 'Klien']);
        Permission::firstOrCreate(['name' => 'delete_klien', 'label' => 'Delete Klien', 'module' => 'Klien']);
    }
}
