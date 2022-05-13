<x-layout>
    <p class="hidden">{{ $language = session()->get('locale') }}</p>
     {{app()->setLocale($language)}}

    <x-movie-container-pt class="mt-44">
        <div class="max-w-[35rem] flex">
    @if($movieExist->count())
        <div class="items-center">
        <div class="flex">  <img src="{{ asset('storage/'.$movie->image) }}" alt="img"></div>
            <div class="text-center mt-12">
                @if(!$movie->quotes->count())
                    <p class="pt-3 text-2xl text-white">no quotes yet . . .</p>
                @else
                    <p class="pt-3 text-3xl text-white">"{{$movie->quotes[random_int(0, count($movie->quotes)-1)]->getTranslation('title', 'title_'.app()->getLocale())}}"</p>
                @endif
                <div class="mt-20"><a  class="text-white pb-40  underline  text-3xl" href="/movie/{{$movie->id}}"> {{$movie->getTranslation('name','name_'.app()->getLocale())}}</a></div>
            </div>
        </div>
    @else

        <h1 class="text-3xl"> no movies yet</h1>
    @endif
        </div>
            </x-movie-container-pt>

</x-layout>
