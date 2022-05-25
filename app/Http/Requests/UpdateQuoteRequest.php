<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateQuoteRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'quote_en'    => 'required|max:255',
			'quote_ka'    => 'required|max:255',
		];
	}

	public function messages()
	{
		return [
			'quote_en.required' => 'english_quote_is_required',
			'quote_en.max'      => 'english_quote_can_not_contain_more_than_:max_symbols',
			'quote_ka.required' => 'georgian_quote_is_required',
			'quote_ka.max'      => 'georgian_quote_can_not_contain_more_than_:max_symbols',
		];
	}
}
