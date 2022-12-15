<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterValidationRequest extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'username'       => 'required|min:3|unique:users,username',
			'email'          => 'required|unique:users,email',
			'password'       => 'required|min:3',
			'repeat_password'=> 'required|same:password',
		];
	}

	public function messages()
	{
		return[
			'username.required'              => __('error.username_required'),
			'username.min'                   => __('error.username_min'),
			'username.unique'                => __('error.username_unique'),
			'email.required'                 => __('error.email_required'),
			'email.unique'                   => __('error.email_unique'),
			'password.required'              => __('error.password_required'),
			'password.min'                   => __('error.password_min'),
			'repeat_password.required'       => __('error.repeat_password_required'),
			'repeat_password.same'           => __('error.repeat_password_same'),
		];
	}
}