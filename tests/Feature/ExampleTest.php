<?php

namespace Tests\Feature;

use App\Models\User;
use Spatie\Permission\Models\Permission;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $users = User::all();

        $this->assertEquals(11, count($users));
    }

    public function test_permissions_found()
    {
        $permission = Permission::findByName('index dashboard');

        $this->assertNotNull($permission);
    }
}
