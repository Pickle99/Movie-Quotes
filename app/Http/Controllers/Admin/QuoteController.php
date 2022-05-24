<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreQuoteRequest;

class QuoteController extends Controller
{
	public function index(Movie $movie): View
	{
		$quotes = $movie->quotes;

		return view('admin.all-quotes', [
			'quotes' => $quotes,
			'movie'  => $movie,
		]);
	}

	public function create(Movie $movie): View
	{
		return view('admin.create-quote', [
			'movie' => $movie,
		]);
	}

	public function store(StoreQuoteRequest $request, Movie $movie): RedirectResponse
	{
		Quote::create([
			'movie_id' => $movie->id,
			'title'    => [
				'title_en' => $request->title_en,
				'title_ka' => $request->title_ka,
			],
		]);
		return redirect('admin');
	}

	public function edit(Quote $quote): View
	{
		return view('admin.edit-quote', [
			'quote' => $quote,
		]);
	}

	public function update(UpdateQuoteRequest $request, Quote $quote): RedirectResponse
	{
		$quote->update([
			'title' => [
				'en' => $request->quote_en,
				'ka' => $request->quote_ka,
			],
		]);

		return redirect('/admin')->with('success', 'Quote updated');
	}

	public function destroy(Quote $quote): RedirectResponse
	{
		$quote->delete();
		return redirect('/admin');
	}
}
