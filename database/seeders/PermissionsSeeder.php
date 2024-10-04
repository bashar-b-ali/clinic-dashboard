<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permissions;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permissions::create(['name' => 'create-user']);
        Permissions::create(['name' => 'edit-user']);
        Permissions::create(['name' => 'delete-user']);
        Permissions::create(['name' => 'view-user']);
        
        Permissions::create(['name' => 'create-section']);
        Permissions::create(['name' => 'edit-section']);
        Permissions::create(['name' => 'delete-section']);
        Permissions::create(['name' => 'view-section']);

        Permissions::create(['name' => 'create-appointment']);
        Permissions::create(['name' => 'edit-appointment']);
        Permissions::create(['name' => 'delete-appointment']);
        Permissions::create(['name' => 'view-appointment']);
    }
}
