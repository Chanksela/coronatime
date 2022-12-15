<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LogoutTest extends TestCase
{
	use RefreshDatabase;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create(['username'=>'admin', 'email'=>'kakhachankseliani@redberry.ge', 'password'=>bcrypt('password'), 'is_verified'=>1]);
	}

	public function test_auth_user_can_logout()
	{
		$response = $this->actingAs($this->user)->post(route('user.logout'));
		$response->assertRedirect('/login');
	}
}