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
			'title.en.required' => 'English movie is required',
			'title.en.max'      => 'English movie can not contain more than :max symbols',
			'title.en.unique'   => 'This movie is already exist',
			'title.ka.required' => 'Georgian movie is required',
			'title.ka.max'      => 'Georgian movie can not contain more than :max symbols',
			'title.ka.unique'   => 'This movie is already exist',
			'image.required'    => 'Image is required',
			'image.image'       => 'This Image should be an image format',
		];
	}
}
