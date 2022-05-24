<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\View\View;

class MovieController extends Controller
{
	/**
	 * Display movie and corresponding quotes.
	 */
	public function show(Movie $movie): View
	{
		return view('components.show-quotes', [
			'movie'  => $movie,
		]);
	}
}
