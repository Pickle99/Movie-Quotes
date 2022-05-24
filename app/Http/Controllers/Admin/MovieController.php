<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreMovieRequest;

class MovieController extends Controller
{
	public function index(): View
	{
		$movies = Movie::all();
		return view('admin.index', [
			'movies' => $movies,
		]);
	}

	public function create(): View
	{
		return view('admin.create-movie');
	}

	public function store(StoreMovieRequest $request): RedirectResponse
	{
		$movie = Movie::create([
			'name' => [
				'en' => $request->movie_en,
				'ka' => $request->movie_ka,
			],
			'image' => 'storage/' . $request->file('image')->store('images'),
		]);

		Quote::create([
			'movie_id' => $movie->id,
			'title'    => [
				'en' => $request->quote_en,
				'ka' => $request->quote_ka,
			],
		]);
		return redirect('/');
	}

	public function edit(Movie $movie): View
	{
		return view('admin.edit-movie', [
			'movie' => $movie,
		]);
	}

	public function update(UpdateMovieRequest $request, Movie $movie): RedirectResponse
	{
		// if movie already exists remove it from storage
		$image = $request->image;
		if (isset($image))
		{
			$image = request()->file('image')->store('images');
		}
		{
			$movie->update([
				'name' => [
					'en' => $request->movie_en,
					'ka' => $request->movie_ka,
				],
				'image'   => $image,
			]);
		}

		return redirect('/')->with('success', 'Movie updated');
	}

	public function destroy(Movie $movie): RedirectResponse
	{
		$movie->delete();
		return redirect('/admin');
	}
}
