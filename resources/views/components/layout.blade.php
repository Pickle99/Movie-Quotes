<!doctype HTML>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-500">

<div class="w-full flex justify-center pt-56">
    <div class="max-w-sm">


        <div class="items-center">
            <img src="{{ $quote[0]->image }}" alt="img">
            <div class="text-center">
                <p class="pt-3 text-2xl text-white">{{$quote[(random_int(0,2))]->name}}</p>
                <a href="/movie/{{$movie->id}}"> <p class="mt-8 text-white underline text-2xl">{{ $movie->name }}</p></a>
            </div>
        </div>


    </div>
</div>

</body>
