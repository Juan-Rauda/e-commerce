<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Verificar si el rol 'user' ya existe antes de crearlo
        if (!Role::where('name', 'user')->exists()) {
            Role::create(['name' => 'user']);
        }

        // Verificar si el rol 'admin' ya existe antes de crearlo
        if (!Role::where('name', 'admin')->exists()) {
            Role::create(['name' => 'admin']);
        }
    }
}
