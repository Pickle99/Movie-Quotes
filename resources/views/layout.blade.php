<!doctype HTML>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<body>
<div class="w-full flex justify-center pt-56">
    <div>

        @foreach($movies as $movie)
            <img class="w-60"  src="{{asset('storage/'.$movie->name.'.jpg')}}" alt="img" />
                    <p class="pt-4 font-bold"> Movie: {{ $movie->name }}</p>
        <p>Quote: {{$movie->quotes[random_int(1,3)]->name}}</p>


        @endforeach


{{--    @foreach($movies as $movie)--}}
{{--        <img class="w-60"  src="{{asset('storage/'.$movie->name.'.jpg')}}" alt="img" />--}}
{{--        <p> Movie: {{ $movie->name }}</p>--}}
{{--       @foreach($quotes as $quote)--}}
{{--                <p  class="py-6"> Quote: {{$quote->name}}</p>--}}
{{--       @endforeach--}}
{{--        _____--}}
{{--    @endforeach--}}
    </div>
</div>
</body>
