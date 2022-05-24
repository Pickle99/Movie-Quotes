<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovieRequest extends FormRequest
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
			'movie_en'  => 'required|max:100|unique:movies,name->name_en,',
			'movie_ka'  => 'required|max:100|unique:movies,name->name_ka,',
			'image'     => 'required|image',
		];
	}

	public function messages()
	{
		return [
			'movie_en.required' => 'English movie is required',
			'movie_en.max'      => 'English movie can not contain more than :max symbols',
			'movie_en.unique'   => 'This movie is already exist',
			'movie_ka.required' => 'Georgian movie is required',
			'movie_ka.max'      => 'Georgian movie can not contain more than :max symbols',
			'movie_ka.unique'   => 'This movie is already exist',
			'image.required'    => 'Image is required',
			'image.image'       => 'This Image should be an image format',
		];
	}
}
