<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
	use RefreshDatabase;

	private User $user;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_auth_is_not_succsesfull_if_creditentials_are_correct_but_user_is_not_verified()
	{
		$this->withExceptionHandling();
		$response = $this->post(route('user.login'), ['username'=>$this->user->username, 'password'=>$this->user->password]);
		$response->assertSessionHas('unverified');
	}

	public function test_auth_is_not_succsesfull_if_creditentials_are_correct_user_is_verified_but_username_is_incorrect()
	{
		$username = 'admin';
		$email = 'test.test@gmail.com';
		$password = 'qweqwe';
		User::factory()->create([
			'username'   => 'testing',
			'email'      => $email,
			'password'   => bcrypt($password),
			'is_verified'=> 1,
		]);

		$response = $this->post('/login', ['username'=>$username, 'password'=>$password]);

		$response->assertRedirect(route('login'));
	}

	public function test_auth_is_succsesfull_if_creditentials_are_correct_and_user_is_verified()
	{
		$username = 'admin';
		$email = 'test.test@gmail.com';
		$password = 'qweqwe';
		User::factory()->create([
			'username'   => $username,
			'email'      => $email,
			'password'   => bcrypt($password),
			'is_verified'=> 1,
		]);

		$response = $this->post('/login', ['username'=>$username, 'password'=>$password]);

		$response->assertRedirect(route('cases.worldwide'));
	}
}