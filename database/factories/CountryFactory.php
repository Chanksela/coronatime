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
			'name'           => ['ka'=>fake()->name(), 'en'=>fake()->name()],
			'country_code'   => fake()->title(),
			'confirmed'      => fake()->randomNumber(),
			'recovered'      => fake()->randomNumber(),
			'deaths'         => fake()->randomNumber(),
		];
	}
}