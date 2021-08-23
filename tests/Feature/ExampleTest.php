<?php

namespace Tests\Feature;

use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_are_found()
    {
        $users = User::all();

        $this->assertEquals(11, count($users));
    }

    public function test_permissions_found()
    {
        $permission = Permission::findByName('index dashboard');

        $this->assertNotNull($permission);
    }

    // at this point the Seeder has been run 3 times, with RefreshDatabase trait applied
    // So since it's running without complaint, the cache-reset and re-seeding both appear to be fine
    public function test_roles_found()
    {
        $roles = Role::first();

        $this->assertNotNull($roles);
    }
}
