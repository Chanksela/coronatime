<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Country;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		Country::factory(150)->create();
		// \App\Models\User::factory(10)->create();

		// \App\Models\User::factory()->create([
		// 	'username'   => 'Test User',
		// 	'email'      => 'test@example2.com',
		// 	'is_verified'=> 0,
		// 	'password'   => bcrypt('password'),
		// ]);
	}
}