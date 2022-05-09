<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
	public function create()
	{
		return view('sessions.create');
	}

	public function store()
	{
		$attributes = request()->validate([
			'email'    => 'required|email',
			'password' => 'required',
		]);

		if (!auth()->attempt($attributes))
		{
			throw ValidationException::withMessages([
				'email'    => 'Wrong email or password!',
			]);
		}
		session()->regenerate();
		return redirect('/')->with('success', 'Happy hacking ;)');
	}

	public function destroy()
	{
		auth()->logout();
		return redirect('/')->with('success', 'Bye :(');
	}
}
