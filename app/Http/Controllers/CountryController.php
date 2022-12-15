<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CountryController extends Controller
{
	public function worldwide()
	{
		return view('countries.worldwide', ['confirmed'=>Country::sum('confirmed'), 'recovered'=>Country::sum('recovered'), 'deaths'=>Country::sum('deaths')]);
	}

	public function countries($sort = null, $by = null): View
	{
		if ($sort === 'asc')
		{
			return view('countries.countries', ['countries'=>Country::all()->sortBy($by)]);
		}
		elseif ($sort === 'desc')
		{
			return view('countries.countries', ['countries'=>Country::all()->sortByDesc($by)]);
		}
		return view('countries.countries', ['countries'=>Country::all()]);
	}

	public function search(Request $request)
	{
		$searchWord = ucfirst($request->search);

		return view('countries.countries', ['countries'=>Country::where('name', 'like', '%' . $searchWord . '%')->get()]);
	}
}