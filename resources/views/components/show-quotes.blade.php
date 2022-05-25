<x-layout>
    <div class="mt-20"><a class=" mx-10 border rounded-3xl p-2 font-sansation text-lg text-white hover:bg-indigo-700" href="/">{{__('translate.go back')}}</a></div>
    <x-movie-container-pt class="pt-12">
            <div class="max-w-[40rem]">
        <div class="items-center pb-40">

            <div class="text-center">
                @if(!$isNull)
              <div class="flex justify-start">
                  <p class="pb-1 text-white text-3xl">{{$movie->name}}</p>
              </div>
             <div>

                    @if(!$count)

                         <div class="my-12">
                             <img src="{{asset($movie->image)}}" alt="img">
                             <p class="py-4 text-3xl bg-red-50 rounded"> {{__('translate.noquote')}}</p>
                         </div>

                 @else
                     @foreach($quotes as $quote)
                         <div class="my-12">
                             <img src="{{asset('images/'.$movie->image)}}" alt="img">
                             <p class="py-4 px-2 text-lg bg-red-50 rounded"> {{$quote->title}}</p>
                         </div>
                     @endforeach
                 @endif
                 @else
                     <h1 class="text-3xl">{{__('translate.sorry')}}</h1>

             @endif
             </div>

            </div>

        </div>
            </div>
    </x-movie-container-pt>

</x-layout>
