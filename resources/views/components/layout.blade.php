<!doctype HTML>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-500">

@auth()
    <div class="mt-4 flex justify-end">

           <div class="px-3.5 bg-red-50 rounded-xl">
            <a href="/admin" class="text-xl">Admin Panel</a>
        </div>

        <form method="POST" action="/logout">
            @csrf


            <div class="mx-20 bg-red-50 px-3.5 rounded-xl">
                <button type="submit" class="text-xl">Log Out</button>
            </div>

        </form>
</div>
@endauth

<div class="w-full flex justify-center pt-56">

    <div class="max-w-sm">

        <div class="items-center">
            <img src="{{ $quote[0]->image }}" alt="img">
            <div class="text-center">
                <p class="pt-3 text-2xl text-white">{{$quote[(random_int(0,2))]->name}}</p>
                <a href="/movie/{{$movie->id}}"> <p class="mt-8 text-white underline text-2xl">{{ $movie->name }}</p></a>
            </div>
        </div>

        @if(session()->has('success'))
            <div
                class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
                <p>{{session('success')}}</p>
            </div>
        @endif
    </div>
</div>
</body>
