<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // Create permissions
        $permissions = [
            'Users.Read',
            'Users.Write',
            'Roles.Read',
            'Roles.Write',
            'Permissions.Read',
            'Permissions.Write'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        Role::create(['name' => 'Administrator'])->givePermissionTo(Permission::all());
        Role::create(['name' => 'Editor'])->givePermissionTo(['Users.Read', 'Roles.Read', 'Permissions.Read']);
        Role::create(['name' => 'Member']);
    }
}
