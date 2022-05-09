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
<div class="w-full flex justify-center pt-20">
    <div class="max-w-sm">
        <div class="items-center pb-40">

            <div class="text-center">
                @if(!is_null($movie))
              <div>
                  <p class="pb-20 text-white text-3xl">{{ $movie->name }}</p>
              </div>
             <div>

                    @if(!$movie->quotes->count())

                         <div class="my-12">
                             <img src="{{asset('storage/'.$movie->image)}}" alt="img">
                             <p class="py-4 bg-red-50 rounded"> Quotes for this movie dont exist yet ...</p>
                         </div>

                 @else
                     @foreach($movie->quotes as $quote)
                         <div class="my-12">
                             <img src="{{asset('storage/'.$movie->image)}}" alt="img">
                             <p class="py-4 bg-red-50 rounded"> {{$quote->title}}</p>
                         </div>
                     @endforeach
                 @endif
                 @else
                     <h1 class="text-3xl">Sorry, movie with this ID doesn't exist</h1>

             @endif

             </div>







            </div>
        </div>


    </div>
</div>

</body>
