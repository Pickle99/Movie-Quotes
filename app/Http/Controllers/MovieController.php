<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class MovieController extends Controller
{
	public function index()
	{
		$movie = Movie::inRandomOrder()->first();

		return view('components.layout', [
			'movie' => $movie,
			'quote' => $movie->quotes,
		]);
	}

	/**
	 * Display the specified resource.
	 */
	public function show($id)
	{
		$movie = Movie::find($id);
		$quotes = Quote::all();

		return view('components.show-quotes', [
			'movie'  => $movie,
			'quotes' => $quotes,
		]);
	}
}
