<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
	public function index()
	{
		$movie = Movie::inRandomOrder()->first();
		return view('components.layout', [
			'movie'  => $movie,
			'quotes' => $movie->quotes,
		]);
	}

	/**
	 * Display the specified resource.
	 */
	public function show($id)
	{
		$movie = Movie::find($id);

		return view('components.show-quotes', [
			'movie'  => $movie,
			'quotes' => $movie->quotes,
		]);
	}
}
