<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
	public function index()
	{
		$movie = Movie::inRandomOrder()->first();

		return view('layout', [
			'movie' => $movie,
			'quote' => $movie->quotes,
		]);
	}
}
