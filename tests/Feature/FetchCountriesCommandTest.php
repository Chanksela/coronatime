<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class FetchCountriesCommandTest extends TestCase
{
	use RefreshDatabase;

	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function test_fetch_countries_command_works_and_countries_are_successfully_fetched_from_external_api()
	{
		$fakeGetRequestArray = [
			'code'=> 'GE',
			'name'=> [
				'en'=> 'Georgia',
				'ka'=> 'საქართველო',
			],
		];

		Http::fake(
			[
				'https://devtest.ge/countries'              => Http::response(json_encode([$fakeGetRequestArray])),
			],
		);

		Http::fake(
			[
				'https://devtest.ge/get-country-statistics' => Http::response(json_encode([
					'id'             => 29,
					'name'           => 'Georgia',
					'country_code'   => 'GE',
					'confirmed'      => 123123,
					'recovered'      => 123123,
					'deaths'         => 123132,
				])),
			]
		);

		$this->artisan('fetch:countries')->assertOk();
	}
}