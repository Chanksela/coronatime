<?php

namespace App\Http\Controllers;

use App\Mail\PasswordResetMail;
use App\Mail\VerificationEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
	public static function sendVerificationMail($name, $email, $token)
	{
		$data = [
			'username'             => $name,
			'token'                => $token,
		];
		Mail::to($email)->send(new VerificationEmail($data));
	}

	public static function sendPasswordResetMail($email, $token)
	{
		Mail::to($email)->send(new PasswordResetMail($token));
	}
}