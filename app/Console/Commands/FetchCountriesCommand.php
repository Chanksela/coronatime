<?php

namespace App\Console\Commands;

use App\Models\Country;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class FetchCountriesCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'fetch:countries';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Fetched countries';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$countries = Http::get('https://devtest.ge/countries')->json();
		foreach ($countries as $country)
		{
			$cases = Http::post('https://devtest.ge/get-country-statistics', ['code'=>$country['code']])->json();

			Country::updateOrCreate(
				[
					'country_code'=> $country['code'],
				],
				[
					'name'        => [
						'ka'=> $country['name']['ka'],
						'en'=> $country['name']['en'],
					],
					'country_code'   => $country['code'],
					'confirmed'      => $cases['confirmed'],
					'recovered'      => $cases['recovered'],
					'deaths'         => $cases['deaths'],
				]
			);
		}
	}
}