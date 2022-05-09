<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class CrudController extends Controller
{
	public function createMovie()
	{
		return view('components.admin-create-page');
	}

	public function storeMovie()
	{
		$validated = request()->validate([
			'name'  => 'required',
			'image' => 'required|image',
		]);

		$validator = request()->validate([
			'title' => 'required',
		]);
		$validated['image'] = request()->file('image')->store('images');
		$movie = Movie::create($validated);

		Quote::create([
			'movie_id' => $movie->id,
			'title'    => $validator['title'],
		]);
		return redirect('/');
	}

	public function index()
	{
		$movies = Movie::all();
		return view('components.admin-page', [
			'movies' => $movies,
		]);
	}

	public function createQuote($id)
	{
		$movie = Movie::find($id);
		return view('components.admin-create-quote-page', [
			'movie' => $movie,
		]);
	}

	public function storeQuote($id)
	{
		$movie = Movie::find($id);

		$validated = request()->validate([
			'title'    => 'required',
		]);
		Quote::create([
			'movie_id' => $movie->id,
			'title'    => $validated['title'],
		]);
		return redirect('admin');
	}

	public function editMovie($id)
	{
		$movie = Movie::find($id);
		return view('components.edit-movie', [
			'movie' => $movie,
		]);
	}

	public function updateMovie($id)
	{
		$movie = Movie::find($id);
		$validated = request()->validate([
			'name'  => 'required',
			'image' => 'required|image',
		]);

		$validator = request()->validate([
			'title' => 'required',
		]);
		$validated['image'] = request()->file('image')->store('images');

		$movie->update($validated);

		$movie->quotes[0]->update($validator);
		return redirect('/')->with('success', 'Movie updated');
	}

	public function editQuote($id)
	{
		$quote = Quote::find($id);
		return view('components.edit-quote', [
			'quote' => $quote,
		]);
	}

	public function updateQuote($id)
	{
		$quote = Quote::find($id);
		$validated = request()->validate([
			'title' => 'required',
		]);

		$quote->update($validated);

		return redirect('/admin')->with('success', 'Quote updated');
	}

	public function destroyQuote($id)
	{
		$quote = Quote::find($id);
		$quote->delete();
		return redirect('/admin');
	}

	public function destroyMovie($id)
	{
		$movie = Movie::find($id);
		$movie->delete();
		return redirect('/admin');
	}
}
