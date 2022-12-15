<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordResetValidation extends FormRequest
{
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'password'       => 'required|min:3',
			'repeat_password'=> 'required|same:password',
		];
	}

	public function messages()
	{
		return[
			'password.required'                    => __('error.password_required'),
			'password.min'                         => __('error.password_min'),
			'repeat_password.required'             => __('error.repeat_password_required'),
			'repeat_password.same'                 => __('error.repeat_password_same'),
		];
	}
}