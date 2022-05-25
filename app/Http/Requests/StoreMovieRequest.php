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
			'title.en.required' => 'English_movie_is_required',
			'title.en.unique'   => 'This_movie_is_already_exist',
			'title.ka.required' => 'Georgian_movie_is_required',
			'title.ka.unique'   => 'This_movie_is_already_exist',
			'quote.en.required' => 'English_quote_is_required',
			'quote.en.unique'   => 'This_quote_is_already_exist',
			'quote.ka.required' => 'Georgian_quote_is_required',
			'quote.ka.unique'   => 'This_quote_is_already_exist',
			'image.required'    => 'Image_is_required',
			'image.image'       => 'This_Image_should_be_an_image_format',
		];
	}
}
