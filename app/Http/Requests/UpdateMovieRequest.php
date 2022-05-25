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
			'title.en'  => 'required|max:100|unique:movies,name->name_en,',
			'title.ka'  => 'required|max:100|unique:movies,name->name_ka,',
			'image'     => 'image',
		];
	}

	public function messages()
	{
		return [
			'title.en.required' => 'English_movie_is_required',
			'title.en.max'      => 'English_movie_can_not_contain_more_than_:max_symbols',
			'title.en.unique'   => 'This_movie_is_already_exist',
			'title.ka.required' => 'Georgian_movie_is_required',
			'title.ka.max'      => 'Georgian_movie_can_not_contain_more_than_:max_symbols',
			'title.ka.unique'   => 'This_movie_is_already_exist',
			'image.required'    => 'Image_is_required',
			'image.image'       => 'This_Image_should_be_an_image_format',
		];
	}
}
