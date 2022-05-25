
<x-layout>
        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md mt-20">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form class="space-y-6" action="/admin/movies" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="movie" class="block text-sm font-medium text-gray-700"> {{__('translate.english_movie_name')}} </label>
                        <div class="mt-1">
                            <input id="movie" name="title[en]" value="{{old('title.en')}}" type="text" autocomplete="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('title.en')
                        <p class="text-red-500 text-lg mt-2">
                            {{ __("translate.$message")}}
                        </p>
                        @enderror
                    </div>

                    <div>
                        <label for="movie" class="block text-sm font-medium text-gray-700"> {{__('translate.georgian_movie_name')}} </label>
                        <div class="mt-1">
                            <input id="movie" name="title[ka]" value="{{old('title.ka')}}" type="text" autocomplete="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('title.ka')
                        <p class="text-red-500 text-lg mt-2">
                            {{ __("translate.$message")}}
                        </p>
                        @enderror
                    </div>

                    <div>
                        <label for="quote" class="block text-sm font-medium text-gray-700"> {{__('translate.english_quote_name')}} </label>
                        <div class="mt-1">
                            <input id="quote" name="quote[en]" value="{{old('quote.en')}}" type="text" autocomplete="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('quote.en')
                        <p class="text-red-500 text-lg mt-2">
                            {{ __("translate.$message")}}
                        </p>
                        @enderror
                    </div>

                    <div>
                        <label for="quote" class="block text-sm font-medium text-gray-700"> {{__('translate.georgian_quote_name')}} </label>
                        <div class="mt-1">
                            <input id="quote"  value="{{old('quote.ka')}}" name="quote[ka]" type="text" autocomplete="current-password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('quote.ka')
                        <p class="text-red-500 text-lg mt-2">
                            {{ __("translate.$message")}}
                        </p>
                        @enderror
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700"> {{__('translate.upload_an_image')}} </label>
                        <div class="mt-1">
                            <input id="image" name="image" type="file" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('image')
                        <p class="text-red-500 text-lg mt-2">
                            {{ __("translate.$message")}}
                        </p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">{{__('translate.add_movie')}}</button>
                    </div>
                </form>


                    </div>
                </div>


</x-layout>
