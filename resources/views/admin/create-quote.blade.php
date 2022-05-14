

<x-layout>
<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0 w-full ml-96">
                <h3 class="text-lg font-medium leading-6 text-gray-200 text-center mt-10">Post New Quote</h3>
            </div>
        </div>
        <div class="flex mt-40">
            @if(!is_null($movie))
            <form method="POST" action="/admin/{{$movie->id}}" enctype="multipart/form-data">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="movie_id" class="block text-sm font-medium text-gray-700"> Movie Name </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" value="{{$movie->getTranslation('name','name_en')}}" disabled name="movie_id" id="movie_id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" >
                                </div>

                            </div>
                        </div>


                        <div>
                            <label for="movie_id" class="block text-sm font-medium text-gray-700"> ფილმის სახელი </label>
                            <div class="mt-1 flex rounded-md shadow-sm">
                                <input type="text" value="{{$movie->getTranslation('name','name_ka')}}" disabled name="movie_id" id="movie_id" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" >
                            </div>
                        </div>


                        <div>
                            <label for="title_en" class="block text-sm font-medium text-gray-700"> Quote for this movie</label>
                            <div class="mt-1">
                                <textarea id="title_en" name="title_en" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder='"example"'>{{ old('title_en') }}</textarea>
                            </div>
                            @error('title_en')
                            <p class="text-red-500 text-lg mt-2">
                                {{$message}}
                            </p>
                            @enderror
                        </div>

                        <div>
                            <label for="title_ka" class="block text-sm font-medium text-gray-700">ციტატა აღნიშნული ფილმისთვის</label>
                            <div class="mt-1">
                                <textarea id="title_ka" name="title_ka" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder='"მაგალითი"'>{{ old('title_ka') }}</textarea>
                            </div>
                            @error('title_ka')
                            <p class="text-red-500 text-lg mt-2">
                                {{$message}}
                            </p>
                            @enderror
                        </div>


                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add</button>
                    </div>
                </div>
            </form>
            @else
                <p class="text-3xl"> Movie with this id dont exist . . . </p>
            @endif
        </div>
    </div>
</div>

</x-layout>
