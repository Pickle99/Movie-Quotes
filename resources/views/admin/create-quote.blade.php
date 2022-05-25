<x-layout>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md mt-20">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" action="/admin/movies/{{$movie->id}}/quotes" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="movie" class="block text-sm font-medium text-gray-700">{{__('translate.movie_name')}}</label>
                    <div class="mt-1">
                        <input id="movie" disabled name="movie" value="{{$movie->name}}" type="text" autocomplete="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('movie')
                    <p class="text-red-500 text-lg mt-2">
                        {{ __("translate.$message")}}
                    </p>
                    @enderror
                </div>


                <div>
                    <label for="quote" class="block text-sm font-medium text-gray-700"> {{__('translate.english_quote_name')}} </label>
                    <div class="mt-1">
                        <input id="quote" name="quote_en" value="{{old('quote_en')}}" type="text" autocomplete="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('quote_en')
                    <p class="text-red-500 text-lg mt-2">
                        {{ __("translate.$message")}}
                    </p>
                    @enderror
                </div>

                <div>
                    <label for="quote" class="block text-sm font-medium text-gray-700"> {{__('translate.georgian_quote_name')}} </label>
                    <div class="mt-1">
                        <input id="quote" name="quote_ka" value="{{old('quote_ka')}}" type="text" autocomplete="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    @error('quote_ka')
                    <p class="text-red-500 text-lg mt-2">
                        {{ __("translate.$message")}}
                    </p>
                    @enderror
                </div>




                <div>
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">{{__('translate.add_quote')}}</button>
                </div>
            </form>


        </div>
    </div>


</x-layout>
