<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
			'title.en'  => 'required|unique:movies,name->name_en',
			'title.ka'  => 'required|unique:movies,name->name_ka',
			'image'     => 'required|image',
			'quote.en'  => 'required|unique:quotes,title->title_en',
			'quote.ka'  => 'required|unique:quotes,title->title_ka',
		];
	}

	public function messages()
	{
		return [
			'title.en.required' => 'English movie is required',
			'title.en.unique'   => 'This movie is already exist',
			'title.ka.required' => 'Georgian movie is required',
			'title.ka.unique'   => 'This movie is already exist',
			'quote.en.required' => 'English quote is required',
			'quote.en.unique'   => 'This quote is already exist',
			'quote.ka.required' => 'Georgian quote is required',
			'quote.ka.unique'   => 'This quote is already exist',
			'image.required'    => 'Image is required',
			'image.image'       => 'This Image should be an image format',
		];
	}
}
