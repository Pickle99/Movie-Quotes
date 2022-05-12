<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LocaleSet
{
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
	 *
	 * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
	 */
	public function handle(Request $request, Closure $next)
	{
		//		if ($request->input('locale') === 'en')
//		{
//			return redirect('/english');
//		}
//
//		if ($request->input('locale') === 'ka')
//		{
//			return redirect('/georgian');
//		}
		if (session()->has('locale'))
		{
			$lang = session()->get('locale');
			app()->setLocale($lang);
//			return redirect('/');
		}
		return $next($request);
	}
}
