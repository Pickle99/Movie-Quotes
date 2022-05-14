<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class MovieController extends Controller
{
	public function index()
	{
		$movies = Movie::all();
		return view('admin.index', [
			'movies' => $movies,
		]);
	}

	public function create()
	{
		return view('admin.create-movie');
	}

	public function store()
	{
		$validated = request()->validate([
			'name_en' => 'required|unique:movies,name->name_en',
			'name_ka' => 'required|unique:movies,name->name_ka',
			'image'   => 'required|image',
		]);

		$validator = request()->validate([
			'title_en' => 'required|unique:quotes,title->title_en',
			'title_ka' => 'required|unique:quotes,title->title_ka',
		]);

		$movie = Movie::create([
			'name' => [
				'name_en' => $validated['name_en'],
				'name_ka' => $validated['name_ka'],
			],
			'image' => request()->file('image')->store('images'),
		]);

		Quote::create([
			'movie_id' => $movie->id,
			'title'    => [
				'title_en' => $validator['title_en'],
				'title_ka' => $validator['title_ka'],
			],
		]);
		return redirect('/');
	}

	public function edit($id)
	{
		$movie = Movie::find($id);
		return view('admin.edit-movie', [
			'movie' => $movie,
		]);
	}

	public function update($id)
	{
		$movie = Movie::find($id);
		$validated = request()->validate([
			'name_en'  => 'max:100|unique:movies,name->name_en,' . $movie->id,
			'name_ka'  => 'max:100|unique:movies,name->name_ka,' . $movie->id,
			'image'    => 'required|image',
		]);

		$movie->update([
			'name' => [
				'name_en' => $validated['name_en'],
				'name_ka' => $validated['name_ka'],
			],
			'image'   => request()->file('image')->store('images'),
		]);

		return redirect('/')->with('success', 'Movie updated');
	}

	public function destroy($id)
	{
		$movie = Movie::find($id);
		$movie->delete();
		return redirect('/admin');
	}
}
