<!doctype HTML>

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<body class="bg-gray-500">

@auth()
    <div class="mt-4 flex justify-end">

           <div class="hover:bg-red-300 px-3.5 bg-red-50 rounded-xl">
            <a href="/admin" class="text-xl">Admin Panel</a>
        </div>

        <form method="POST" action="/logout">
            @csrf


            <div class="hover:bg-red-300 mx-20 bg-red-50 px-3.5 rounded-xl">
                <button type="submit" class="text-xl">Log Out</button>
            </div>

        </form>
</div>
@endauth




<div class="fixed mt-80 ml-4 ">
    <div class="mb-2">
        <a href="" class="p-1 border rounded-3xl text-white text-lg">en</a>
    </div>
    <div class="">
        <a href="" class="p-1 border rounded-3xl text-white text-lg">ka</a>
    </div>
</div>
<div class="w-full flex justify-center pt-56">
    <div class="max-w-sm flex">

           @if($movieExist->count())
            <div class="items-center">
                <img src="{{ asset('storage/'.$movie->image) }}" alt="img">
                <div class="text-center">
                    @if(!$movie->quotes->count())
                        <p class="pt-3 text-2xl text-white">no quotes yet . . .</p>
                    @else

                        <p class="pt-3 text-2xl text-white">"{{{$movie->quotes[0]->getTranslation("title", 'title_'.app()->getLocale())}}}"</p>
                    @endif
                        <div class="mt-8"><a  class=" text-white underline text-2xl" href="/movie/{{$movie->id}}"> {{$movie->getTranslation('name','name_'.app()->getLocale())}}</a></div>
                </div>
            </div>
        @else

            <h1 class="text-3xl"> no movies yet</h1>
           @endif

        @if(session()->has('success'))
            <div
                class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
                <p>{{session('success')}}</p>
            </div>
        @endif
    </div>
</div>
</body>
