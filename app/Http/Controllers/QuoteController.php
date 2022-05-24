<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\View\View;

class QuoteController extends Controller
{
	/**
	 * Display view with random quote
	 */
	public function index(): View
	{
		$movie = Movie::inRandomOrder()->first();
		$movies = Movie::all();
//		$countMovies = $movies->count();
//		$countQuotes = $movie->quotes->count();
//		$randomQuotes = $movie->quotes[random_int(0, count($movie->quotes) - 1)];
		return view('components.random-quote', [
			'movie'            => $movie,
			'movies'           => $movies,
			//			'countMovies'      => $countMovies,
			//			'countQuotes'      => $countQuotes,
			//			'randomQuotes'     => $randomQuotes,
		]);
	}
}
