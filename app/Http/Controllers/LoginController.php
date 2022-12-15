<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginValidationRequest;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
	public function login(LoginValidationRequest $request): RedirectResponse
	{
		$input = $request->all();
		$fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		if (auth()->attempt([$fieldType => $input['username'], 'password' => $input['password']]))
		{
			return redirect()->route('cases.worldwide');
		}
		else
		{
			return redirect()->route('login')->with('error', __('error.failed_login'));
		}
	}
}