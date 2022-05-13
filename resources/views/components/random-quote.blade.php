<x-layout>
    {{ $language = session()->get('locale') }}
    {{app()->setLocale($language)}}

    <x-movie-container-pt class="pt-56">
        <div class="max-w-sm flex">
    @if($movieExist->count())
        <div class="items-center">
            <img src="{{ asset('storage/'.$movie->image) }}" alt="img">
            <div class="text-center">
                @if(!$movie->quotes->count())
                    <p class="pt-3 text-2xl text-white">no quotes yet . . .</p>
                @else
                    <p class="pt-3 text-2xl text-white">"{{$movie->quotes[random_int(0, count($movie->quotes)-1)]->getTranslation('title', 'title_'.app()->getLocale())}}"</p>
                @endif
                <div class="mt-8"><a  class=" text-white underline text-2xl" href="/movie/{{$movie->id}}"> {{$movie->getTranslation('name','name_'.app()->getLocale())}}</a></div>
            </div>
        </div>
    @else

        <h1 class="text-3xl"> no movies yet</h1>
    @endif
        </div>
            </x-movie-container-pt>

</x-layout>
