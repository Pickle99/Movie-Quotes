<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuoteRequest extends FormRequest
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
			'quote_en' => 'required|max:255|unique:quotes,title->title_en',
			'quote_ka' => 'required|max:255|unique:quotes,title->title_ka',
		];
	}

	public function messages()
	{
		return [
			'quote_en.required' => 'English_quote_is_required',
			'quote_en.max'      => 'English_quote_can_not_contain_more_than_:max_symbols',
			'quote_ka.required' => 'Georgian_quote_is_required',
			'quote_en.unique'   => 'This_quote_is_already_exist',
			'quote_ka.max'      => 'Georgian_quote_can_not_contain_more_than_:max_symbols',
			'quote_ka.unique'   => 'This_quote_is_already_exist',
		];
	}
}
