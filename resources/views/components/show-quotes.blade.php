<x-layout>
    <p class="hidden">{{ $language = session()->get('locale') }}</p>
    {{app()->setLocale($language)}}

    <x-movie-container-pt class="pt-12">
            <div class="max-w-[40rem]">
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
                             <p class="py-4 text-3xl bg-red-50 rounded"> Quotes for this movie dont exist yet ...</p>
                         </div>

                 @else
                     @foreach($movie->quotes as $quote)
                         <div class="my-12">
                             <img src="{{asset('storage/'.$movie->image)}}" alt="img">
                             <p class="py-4 text-lg bg-red-50 rounded"> {{$quote->getTranslation('title', 'title_'.app()->getLocale())}}</p>
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
