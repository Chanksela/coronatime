<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordResetValidation;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PasswordResetcontroller extends Controller
{
	public function sendPasswordResetEmail(Request $request): RedirectResponse|View
	{
		$user = User::firstWhere('email', $request->email);
		if ($user != null)
		{
			MailController::sendPasswordResetMail($request->email, $user->token);
			return view('components.feedback.resetEmailSent');
		}
		return redirect()->back()->with('fail', __('error.email_incorrect'));
	}

	public function edit($token): View
	{
		$user = User::firstWhere('token', $token);

		return view('reset', ['user'=>$user]);
	}

	public function update(PasswordResetValidation $request, $token): View
	{
		$user = User::firstWhere('token', $token);
		$user->update(['password'=>bcrypt($request->password)]);
		return view('components.feedback.passwordIsReset');
	}
}