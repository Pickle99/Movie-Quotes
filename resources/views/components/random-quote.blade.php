<x-layout>

    <x-movie-container-pt class="mt-44">
        <div class="max-w-[35rem] flex">
    @if($movies->count())
        <div class="items-center">
        <div class="flex">  <img src="{{ asset($movie->image) }}" alt="img"></div>
            <div class="text-center mt-12">
                @if(!$movie->quotes->count())
                    <p class="pt-3 text-2xl text-white">{{__('translate.noquote')}} . . .</p>
                @else
                    <p class="pt-3 text-3xl text-white">"{{$movie->quotes[random_int(0, count($movie->quotes)-1)]->title}}"</p>
                @endif
                <div class="mt-20"><a  class="text-white pb-40  underline  text-3xl" href="/movie/{{$movie->id}}"> {{$movie->name}}</a></div>
            </div>
        </div>
    @else

        <h1 class="text-3xl"> {{__('translate.nomovie')}}</h1>
    @endif
        </div>
            </x-movie-container-pt>

</x-layout>
