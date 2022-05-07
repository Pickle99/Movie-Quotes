<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
	public function create()
	{
		return view('sessions.create', [
		]);
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
				'email' => 'Hey! Wrong email!',
			]);
		}
		session()->regenerate();
		return redirect('admin')->with('success', 'Happy hacking');
	}
}
