<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class QuoteController extends Controller
{
	public function index($id)
	{
		$quotes = Quote::all();
		$movie = Movie::find($id);
		return view('admin.all-quotes', [
			'quotes' => $quotes,
			'movie'  => $movie,
		]);
	}

	public function create($id)
	{
		$movie = Movie::find($id);
		return view('admin.create-quote', [
			'movie' => $movie,
		]);
	}

	public function store($id)
	{
		$movie = Movie::find($id);

		$validated = request()->validate([
			'title_en' => 'max:255|required|unique:quotes,title->title_en',
			'title_ka' => 'max:255|required|unique:quotes,title->title_ka',
		]);
		Quote::create([
			'movie_id' => $movie->id,
			'title'    => [
				'title_en' => $validated['title_en'],
				'title_ka' => $validated['title_ka'],
			],
		]);
		return redirect('admin');
	}

	public function edit($id)
	{
		$quote = Quote::find($id);
		return view('admin.edit-quote', [
			'quote' => $quote,
		]);
	}

	public function update($id)
	{
		$quote = Quote::find($id);
		$validated = request()->validate([
			'title_en' => 'max:255|required|unique:quotes,title->title_en,' . $quote->id,
			'title_ka' => 'max:255|required|unique:quotes,title->title_ka,' . $quote->id,
		]);

		$quote->update([
			'title' => [
				'title_en' => $validated['title_en'],
				'title_ka' => $validated['title_ka'],
			],
		]);

		return redirect('/admin')->with('success', 'Quote updated');
	}

	public function destroy($id)
	{
		$quote = Quote::find($id);
		$quote->delete();
		return redirect('/admin');
	}
}
