<?php

namespace Tests\Feature;

use Tests\TestCase;

class LocaleControllerTest extends TestCase
{
	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function test_if_locale_exists_change_language()
	{
		$response = $this->get(route('locale', ['locale'=>'en']));
		$response->assertSessionHas('lang', function ($value) {
			return $value === 'en';
		});
	}

	public function test_if_locale_does_not_exist_return_language_to_english()
	{
		$response = $this->get(route('locale', ['locale'=>'as']));
		$response->assertSessionHas('lang', function ($value) {
			return $value === 'en';
		});
	}
}