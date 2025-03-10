<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => ['ka' => 'საქართველო', 'en' => 'Georgia'],
                'country_code' => 'GE',
                'confirmed' => 50000,
                'recovered' => 48500,
                'deaths' => 500,
            ],
            [
                'name' => ['ka' => 'აშშ', 'en' => 'United States'],
                'country_code' => 'US',
                'confirmed' => 10000000,
                'recovered' => 9500000,
                'deaths' => 200000,
            ],
            [
                'name' => ['ka' => 'გერმანია', 'en' => 'Germany'],
                'country_code' => 'DE',
                'confirmed' => 1500000,
                'recovered' => 1400000,
                'deaths' => 25000,
            ],
            [
                'name' => ['ka' => 'საფრანგეთი', 'en' => 'France'],
                'country_code' => 'FR',
                'confirmed' => 2000000,
                'recovered' => 1900000,
                'deaths' => 40000,
            ],
            [
                'name' => ['ka' => 'იტალია', 'en' => 'Italy'],
                'country_code' => 'IT',
                'confirmed' => 1800000,
                'recovered' => 1700000,
                'deaths' => 60000,
            ],
            [
                'name' => ['ka' => 'ესპანეთი', 'en' => 'Spain'],
                'country_code' => 'ES',
                'confirmed' => 1600000,
                'recovered' => 1500000,
                'deaths' => 35000,
            ],
            [
                'name' => ['ka' => 'რუსეთი', 'en' => 'Russia'],
                'country_code' => 'RU',
                'confirmed' => 3000000,
                'recovered' => 2800000,
                'deaths' => 80000,
            ],
            [
                'name' => ['ka' => 'იაპონია', 'en' => 'Japan'],
                'country_code' => 'JP',
                'confirmed' => 500000,
                'recovered' => 480000,
                'deaths' => 9000,
            ],
            [
                'name' => ['ka' => 'ჩინეთი', 'en' => 'China'],
                'country_code' => 'CN',
                'confirmed' => 9000000,
                'recovered' => 8800000,
                'deaths' => 5000,
            ],
            [
                'name' => ['ka' => 'სამხრეთ კორეა', 'en' => 'South Korea'],
                'country_code' => 'KR',
                'confirmed' => 400000,
                'recovered' => 390000,
                'deaths' => 3000,
            ],
            [
                'name' => ['ka' => 'ინდოეთი', 'en' => 'India'],
                'country_code' => 'IN',
                'confirmed' => 6000000,
                'recovered' => 5800000,
                'deaths' => 100000,
            ],
            [
                'name' => ['ka' => 'ბრაზილია', 'en' => 'Brazil'],
                'country_code' => 'BR',
                'confirmed' => 4000000,
                'recovered' => 3800000,
                'deaths' => 120000,
            ],
            [
                'name' => ['ka' => 'კანადა', 'en' => 'Canada'],
                'country_code' => 'CA',
                'confirmed' => 900000,
                'recovered' => 870000,
                'deaths' => 20000,
            ],
            [
                'name' => ['ka' => 'ავსტრალია', 'en' => 'Australia'],
                'country_code' => 'AU',
                'confirmed' => 300000,
                'recovered' => 290000,
                'deaths' => 4000,
            ],
            [
                'name' => ['ka' => 'თურქეთი', 'en' => 'Turkey'],
                'country_code' => 'TR',
                'confirmed' => 1200000,
                'recovered' => 1150000,
                'deaths' => 25000,
            ],
            [
                'name' => ['ka' => 'უკრაინა', 'en' => 'Ukraine'],
                'country_code' => 'UA',
                'confirmed' => 700000,
                'recovered' => 650000,
                'deaths' => 15000,
            ],
            [
                'name' => ['ka' => 'სომხეთი', 'en' => 'Armenia'],
                'country_code' => 'AM',
                'confirmed' => 80000,
                'recovered' => 75000,
                'deaths' => 1500,
            ],
            [
                'name' => ['ka' => 'აზერბაიჯანი', 'en' => 'Azerbaijan'],
                'country_code' => 'AZ',
                'confirmed' => 90000,
                'recovered' => 85000,
                'deaths' => 1200,
            ],
            [
                'name' => ['ka' => 'პოლონეთი', 'en' => 'Poland'],
                'country_code' => 'PL',
                'confirmed' => 800000,
                'recovered' => 760000,
                'deaths' => 18000,
            ],
            [
                'name' => ['ka' => 'დიდი ბრიტანეთი', 'en' => 'United Kingdom'],
                'country_code' => 'GB',
                'confirmed' => 2500000,
                'recovered' => 2400000,
                'deaths' => 70000,
            ],
        ];

        foreach ($countries as $countryData) {
            Country::create($countryData);
        }
    }
}
