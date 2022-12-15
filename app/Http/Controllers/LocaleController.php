<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LocaleController extends Controller
{
	public function change($locale): RedirectResponse
	{
		if (in_array($locale, config('app.avaiable_locale')))
		{
			session()->put('lang', $locale);
		}
		else
		{
			session()->put('lang', 'en');
		}
		return redirect()->back();
	}
}