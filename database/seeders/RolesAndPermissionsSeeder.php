<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        /*reset cached roles and permissions*/
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        /*Create permissions*/

        /*Dashboard*/
        Permission::create(['name' => 'index dashboard']);

        /*Add admin role*/
        $admin = Role::create(['name' => 'admin']);

        /*Dashboard*/
        $admin->givePermissionTo('index dashboard');
    }
}
