<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LanguageController extends Controller
{
	// Put this Method in LanguageController
	public function locale($locale): RedirectResponse
	{
		session()->put('locale', $locale);
		return redirect()->back();
	}
}
