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
		$isNull = is_null($movie);
		$count = $movie->quotes->count();
		$quotes = $movie->quotes;
		return view('components.show-quotes', [
			'count'   => $count,
			'isNull'  => $isNull,
			'movie'   => $movie,
			'quotes'  => $quotes,
		]);
	}
}
