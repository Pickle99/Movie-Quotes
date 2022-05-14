<x-layout>
    <div class="m-40">
        <p class="hidden">{{ $language = session()->get('locale') }}</p>
        {{app()->setLocale($language)}}
      <div class="mb-10"><a href="/admin/movies/create" class="hover:bg-green-200 bg-white p-1 rounded-full text-2xl text-gray-700">Add Movie</a></div>
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach($movies as $movie)
        <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
            <div class="flex-1 flex flex-col p-8">
                <img class="w-96 h-48 flex-shrink-0 mx-auto" src="{{asset('storage/'.$movie->image)}}" alt="img">
                <h3 class="mt-6 text-gray-900 text-sm font-medium">{{$movie->getTranslation('name', 'name_'.app()->getLocale())}}</h3>
                <dl class="mt-1 flex-grow flex flex-col justify-between">
                    @if($movie->quotes->count())
                        <dd class="text-gray-500 text-sm">{{$movie->quotes[random_int(0, count($movie->quotes)-1)]->getTranslation('title', 'title_'.app()->getLocale())}}</dd>
                    @else
                        <dd class="text-gray-500 text-sm">no quotes yet..</dd>
                    @endif

                    <dd class="mt-3">
                        <a href="/admin/quotes/{{$movie->id}}" class="px-2 py-1 text-blue-600 text-lg font-medium underline hover:bg-blue-200 rounded-full">Show all quotes</a>
                    </dd>

                </dl>
            </div>
            <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="w-0 flex-1 flex hover:bg-green-500">
                        <a href="/admin/movie/{{$movie->id}}/edit" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg">
                            <span class="ml-3">Edit</span>
                        </a>
                    </div>
                    <div class="-ml-px w-0 flex-1 flex hover:bg-red-500">
                        <a href="tel:+1-202-555-0170" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg">
                            <form method="POST" action="/admin/movie/{{$movie->id}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="ml-3">Delete</button>
                            </form>
                        </a>
                    </div>
                </div>
            </div>
        </li>
        @endforeach

    </ul>
   </div>

</x-layout>
