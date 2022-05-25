<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
	public function locale($locale): RedirectResponse
	{
		session()->put('locale', $locale);
		return redirect()->back();
	}
}
