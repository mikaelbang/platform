<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class UserTest extends TestCase
{
	use RefreshDatabase;

	/** @test */
    public function a_user_has_a_profile()
    {
        $user = factory(\App\User::class)->create();
        $this->get("/profiles/{$user->name}")
            ->assertSee($user->name);
    }
}
