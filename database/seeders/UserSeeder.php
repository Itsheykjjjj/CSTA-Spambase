<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $roles = [
            'CSTA Administrator',
            'Property Custodian',
            'Student Assistant'
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role
            ]);
        }

        $permissions = [
            'Administrator Access',
            'Property and Assets Inventory',
            'User Management',
            'Repairs & Upkeep',
            'Reservation Management',
            'File Maintenance',
        ];

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission
            ]);
        }
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
