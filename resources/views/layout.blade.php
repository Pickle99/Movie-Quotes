<!doctype HTML>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<body>
<div class="w-full flex justify-center pt-56">
    <div>

        @foreach($movies as $movie)
            <img class="w-60"  src="{{asset('storage/'.$movie->name.'.jpg')}}" alt="img" />
                    <p class="pt-4 font-bold"> Movie: {{ $movie->name }}</p>
        <p>Quote: {{$movie->quotes[random_int(0,2)]->name}}</p>


        @endforeach

    </div>
</div>
</body>
