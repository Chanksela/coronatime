<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class VerifiedUser
{
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
	 *
	 * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
	 */
	public function handle(Request $request, Closure $next)
	{
		$currentUsername = User::all()->firstWhere('username', $request->username);
		$currentEmail = User::all()->firstWhere('email', $request->username);
		if ($currentUsername?->is_verified === 0 || $currentEmail?->is_verified === 0)
		{
			return redirect()->back()->with(session()->flash('unverified', __('feedback.not_verified')));
		}
		return $next($request);
	}
}