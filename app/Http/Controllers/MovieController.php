<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;

class MovieController extends Controller
{
	public function index()
	{
		$movies = Movie::inRandomOrder()->limit(1)->get();
//		$quote = Quote::inRandomOrder()->limit(1)->get();
		//        @foreach($movies as $movie)
		//            <img class="w-60"  src="{{asset('storage/'.$movie->name.'.jpg')}}" alt="img" />
		//                    <p class="pt-4 font-bold"> Movie: {{ $movie->name }}</p>
		//    @foreach($movie->quotes as $quote)
		//                <p  class="py-3"> Quote: {{$quote->name}}</p>
		//    @endforeach
		//        @endforeach

		return view('layout', [
			'movies' => $movies,
		]);
	}
}
