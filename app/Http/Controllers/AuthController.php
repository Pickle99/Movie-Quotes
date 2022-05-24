<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthController extends Controller
{
	public function login(): View // add return Types
	{
		return view('sessions.login'); // This Should be login
	}

	public function auth(AuthRequest $request): RedirectResponse
	{
		// use Custom Request
		$attributes = $request->validated();
		if (!auth()->attempt($attributes))
		{
			throw ValidationException::withMessages([
				'email'    => 'Wrong email or password!',
			]);
		}
		session()->regenerate();
		return redirect('/')->with('success', 'Happy hacking ;)');
	}

	public function logout(): RedirectResponse
	{
		auth()->logout();
		return redirect('/')->with('success', 'Bye :(');
	}
}
