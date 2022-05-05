<!doctype HTML>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-500">
<div class="w-full flex justify-center pt-56">
    <div class="max-w-sm">
        @foreach($movies as $movie)
            <div class="items-center">
            <img class="max-w-sm"  src="{{asset('storage/'.$movie->name.'.jpg')}}" alt="img" />
              <div class="text-center">
                  <p class="pt-3 text-lg">Quote: {{$movie->quotes[random_int(0,2)]->name}}</p>
                   <a href="/movie/{{$movie->id}}"> <p class="mt-8 font-bold text-2xl"> Movie: {{ $movie->name }}</p></a>

              </div>
            </div>
        @endforeach
    </div>
</div>
</body>
