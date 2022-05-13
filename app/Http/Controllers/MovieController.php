<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
	public function index()
	{
		$movie = Movie::inRandomOrder()->first();
		$movieExist = Movie::all();

		return view('components.random-quote', [
			'movie'      => $movie,
			'movieExist' => $movieExist,
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
		]);
	}
}
