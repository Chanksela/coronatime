<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PasswordResetControllerTest extends TestCase
{
	use RefreshDatabase;

	protected function setUp(): void
	{
		parent::setUp();
		$this->user = User::factory()->create();
	}

	public function test_password_reset_is_unsuccessful_if_no_email_is_provided()
	{
		$response = $this->post(route('password.reset'));
		$response->assertStatus(302);
	}

	public function test_password_reset_is_successful_if_email_is_provided_and_user_does_exist()
	{
		$response = $this->post(route('password.reset', ['email'=>$this->user->email]));
		$response->assertStatus(200);
	}

	public function test_password_reset_page_is_accessable_if_token_is_correct()
	{
		$response = $this->get(route('password.edit', ['token'=>$this->user->token]));
		$response->assertStatus(200);
	}

	public function test_password_is_not_updated_and_returns_errors_if_input_is_not_provided()
	{
		$response = $this->post(route('password.update', ['token'=>$this->user->token]));
		$response->assertStatus(302);
		$response->assertSessionHasErrors('password');
	}

	public function test_password_is_updated_if_token_is_correct_and_new_password_is_provided()
	{
		$password = bcrypt('password');
		$response = $this->post(route('password.update', ['token'=>$this->user->token, 'password'=>$password, 'repeat_password'=>$password]));
		$response->assertSuccessful();
	}
}