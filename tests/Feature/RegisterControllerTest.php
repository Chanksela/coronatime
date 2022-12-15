<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
	use RefreshDatabase;

	public function test_if_user_is_not_created_guest_is_redirected_back_with_error_message()
	{
		$response = $this->post(route('user.store'));
		$response->assertSessionHasErrors();
	}

	public function test_user_is_stored_if_correct_creditentials_are_provided()
	{
		$username = 'admin';
		$email = 'test.test@gmail.com';
		$password = 'qweqwe';

		$response = $this->post(route('user.store'), [
			'username'         => $username,
			'email'            => $email,
			'password'         => $password,
			'repeat_password'  => $password,
		]);
		$response->assertStatus(200);
	}

	public function test_user_is_redirected_with_flash_message_if_user_is_already_verified()
	{
		$user = User::factory()->create(['is_verified'=>1]);
		$response = $this->get(route('verify.user', ['token'=>$user->token]));
		$response->assertSessionHas('failed');
	}

	public function test_user_is_verified_if_user_is_not_verified()
	{
		$user = User::factory()->create();

		$response = $this->get(route('verify.user', ['token'=>$user->token]));
		$response->assertSuccessful();
	}
}