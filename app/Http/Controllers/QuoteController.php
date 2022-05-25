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
		$quote = $movie->quotes->count() ? $movie->quotes->random() : null;
		return view('components.random-quote', [
			'movie'            => $movie,
			'movies'           => $movies,
			'quote'            => $quote,
		]);
	}
}
