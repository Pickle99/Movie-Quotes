<x-layout>
    {{ $language = session()->get('locale') }}
    {{app()->setLocale($language)}}
    <x-movie-container-pt class="pt-20">
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
                             <p class="py-4 bg-red-50 rounded"> {{$quote->getTranslation('title', 'title_'.app()->getLocale())}}</p>
                         </div>
                     @endforeach
                 @endif
                 @else
                     <h1 class="text-3xl">Sorry, movie with this ID doesn't exist</h1>

             @endif
             </div>

            </div>

        </div>
{{--    </div>--}}
    </x-movie-container-pt>
{{--</div>--}}
</x-layout>
