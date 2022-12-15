<?php

namespace Tests\Feature;

use App\Models\Country;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CountryControllerTest extends TestCase
{
	use RefreshDatabase;

	protected function setUp(): void
	{
		parent::setUp();
		$country1 = Country::factory()->create([
			'name'                                      => ['ka'=>'ავღანეთი', 'en'=>'Afghanistan'],
		]);

		$country2 = Country::factory()->create([
			'name'                                      => ['ka'=>'ალბანეთი', 'en'=>'Albania'],
		]);

		$country3 = Country::factory()->create([
			'name'                                      => ['ka'=>'ანტარქტიკა', 'en'=>'Antarctica'],
		]);
		$this->user = User::factory()->create();
		$this->country1 = $country1;
		$this->country2 = $country2;
		$this->country3 = $country3;
	}

	public function test_auth_user_can_visit_worldwide_page()
	{
		$response = $this->actingAs($this->user)->get(route('cases.worldwide'));
		$response->assertStatus(200);
	}

	public function test_you_can_visit_cases_countries_page_as_a_user()
	{
		$response = $this->actingAs($this->user)->get(route('cases.countries'));
		$response->assertStatus(200);
	}

	public function test_sort_by_asc_is_successfull()
	{
		$response = $this->actingAs($this->user)->get(route('cases.countries', ['sort' => 'asc']));
		$response->assertSeeTextInOrder(['Afghanistan', 'Albania', 'Antarctica']);
	}

	public function test_sort_by_desc_is_successfull()
	{
		$response = $this->actingAs($this->user)->get(route('cases.countries', ['sort' => 'desc']));
		$response->assertSeeTextInOrder([$this->country3->name, $this->country2->name, $this->country1->name]);
	}

	public function test_search_works_for_auth_user()
	{
		$searchWord = ucfirst('albania');
		$response = $this->actingAs($this->user)->get(route('country.search', ['countries'=>Country::where('name', 'like', '%' . $searchWord . '%')->get()]));
		$response->assertSeeText($searchWord);
	}
}