<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterValidationRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
	public function store(RegisterValidationRequest $request): RedirectResponse|View
	{
		$user = User::create([
			'username'         => $request->username,
			'email'            => $request->email,
			'token'            => sha1(time()),
			'password'         => bcrypt($request->password),
		]);

		if ($user != null)
		{
			MailController::sendVerificationMail($user->username, $user->email, $user->token);
			return view('components.feedback.signup');
		}
	}

	public function verifyUser($token): RedirectResponse|View
	{
		$user = User::where(['token'=>$token])->first();
		if ($user->is_verified === 1)
		{
			return redirect()->route('login')->with(session()->flash('failed', 'Account is already verified'));
		}
		elseif ($user->is_verified === 0)
		{
			$user->is_verified = 1;
			$user->save();
			return view('components.feedback.verified');
		}
	}
}