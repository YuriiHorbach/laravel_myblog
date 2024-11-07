<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_users_get_fetched_from_db()
    {
        User::factory(10)->create();

        $users = User::all();

        $this->assertCount(10, $users);

        $this->assertNotNull($users->first()->name);
    }
}
