<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Support\Facades\File;
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
		$movie = new Movie;
		$movie->name = $request->title;
		if ($request->hasFile('image'))
		{
			File::delete(public_path('images/') . $movie->image);
			$file = $request->file('image');
			$filename = $file->getClientOriginalName();
			$file->move('images/', $filename);
			$movie->image = $filename;
		}
		$movie->save();

		$quote = new Quote;
		$quote->title = $request->quote;
		$quote->movie_id = $movie->id;
		$quote->save();

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
		$movie->name = $request->title;

		if ($request->hasFile('image'))
		{
			File::delete(public_path('images') . $movie->image);
			$file = $request->file('image');
			$filename = $file->getClientOriginalName();
			$file->move('images/', $filename);
			$movie->image = $filename;
		}
		$movie->update();

		return redirect('/')->with('success', 'Movie updated');
	}

	public function destroy(Movie $movie): RedirectResponse
	{
		$movie->delete();
		return redirect('/admin');
	}
}
