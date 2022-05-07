<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class CrudController extends Controller
{
	public function create()
	{
//		$movie = Movie::all();
//		$movie->quotes->movie_id = $movie->id;
//		$movie = Movie::create();
		return view('components.admin-create-page', [
			//			'movie' => $movie->id,
		]);
	}

	public function store()
	{
//		$attributes = request()->validate([
//			'name'  => 'required',
//			'image' => 'required',
//		]);
//		$quoteatt = request()->validate([
//			'name'     => 'required',
//			'movie_id' => $movie->id,
//		]);
//		$attributes['image'] = request()->file('image')->store('images');
//		Movie::create($attributes);
//		Quote::create($quoteatt);
//		return redirect('/');
		$validated = request()->validate([
			'name'  => 'required',
			'image' => 'required',
		]);

		$validator = request()->validate([
			'quote' => 'required',
		]);

		$movie = Movie::create($validated);
//		$movie->image->create(['image' => $validated['image']]);
		Quote::create([
			'movie_id' => $movie->id,
			'quote'    => $validator['quote'],
		]);
		return redirect('/');
	}
}
