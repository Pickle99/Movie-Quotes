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
			'movie_en'  => 'required|unique:movies,name->name_en',
			'movie_ka'  => 'required|unique:movies,name->name_ka',
			'image'     => 'required|image',
			'quote_en'  => 'required|unique:quotes,title->title_en',
			'quote_ka'  => 'required|unique:quotes,title->title_ka',
		];
	}

	public function messages()
	{
		return [
			'movie_en.required' => 'English movie is required',
			'movie_en.unique'   => 'This movie is already exist',
			'movie_ka.required' => 'Georgian movie is required',
			'movie_ka.unique'   => 'This movie is already exist',
			'quote_en.required' => 'English quote is required',
			'quote_en.unique'   => 'This quote is already exist',
			'quote_ka.required' => 'Georgian quote is required',
			'quote_ka.unique'   => 'This quote is already exist',
			'image.required'    => 'Image is required',
			'image.image'       => 'This Image should be an image format',
		];
	}
}
