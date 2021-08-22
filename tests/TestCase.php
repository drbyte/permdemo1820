<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;

/**
 * Class TestCase
 *
 * @package Tests
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * @var
     */
    protected $admin;

    /**
     * @var
     */
    protected $user_one;

    /**
     * @var
     */
    protected $user_two;

    /**
     * @var
     */
    protected $user_admin;

    /**
     * Set up the tests
     */
    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate', ['-vvv' => true]);
        $this->seed();
        $this->user_admin = User::where('email', 'test@example.org')->first();
    }
}
