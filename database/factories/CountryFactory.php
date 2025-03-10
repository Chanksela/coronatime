<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition()
	{
		return [
			'name'           => ['ka'=>fake()->country(), 'en'=>fake()->country()],
			'country_code'   => fake()->countryCode(),
			'confirmed'      => fake()->randomNumber(),
			'recovered'      => fake()->randomNumber(),
			'deaths'         => fake()->randomNumber(),
		];
	}
}