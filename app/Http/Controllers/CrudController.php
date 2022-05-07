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
		$validated = request()->validate([
			'name'  => 'required',
			'image' => 'required',
		]);

		$validator = request()->validate([
			'quote' => 'required',
		]);
		$validated['image'] = request()->file('image')->store('images');
		$movie = Movie::create($validated);

		Quote::create([
			'movie_id' => $movie->id,
			'quote'    => $validator['quote'],
		]);
		return redirect('/');
	}
}
