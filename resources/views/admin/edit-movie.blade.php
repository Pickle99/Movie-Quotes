
 <x-layout>
<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0 w-full ml-96">
                <h3 class="text-lg font-medium leading-6 text-white text-center mt-10">Edit (Id: {{$movie->id}}) Movie</h3>
            </div>
        </div>
        <div class="flex mt-40">
            <form method="POST" action="/admin/movie/{{$movie->id}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="name_en" class="block text-sm font-medium text-gray-700"> Movie Name </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" value="{{$movie->getTranslation('name','name_en')}}" name="name_en" id="name_en" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                </div>
                                @error('name_en')
                                <p class="text-red-500 text-lg mt-2">
                                    {{$message}}
                                </p>
                                @enderror
                            </div>
                        </div>

           <div>
               <label for="name_ka" class="block text-sm font-medium text-gray-700"> ფილმის სახელი </label>
               <div class="mt-1 flex rounded-md shadow-sm">
                   <input type="text" value="{{$movie->getTranslation('name','name_ka')}}" name="name_ka" id="name_ka" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
               </div>
               @error('name_ka')
               <p class="text-red-500 text-lg mt-2">
                   {{$message}}
               </p>
               @enderror
           </div>


                        <div>
                            <label class="block text-sm font-medium text-gray-700"> Cover photo </label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">

                                        <label for="image" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                            <span>Upload a new file</span>
                                            <input id="image" name="image" src="{{asset('storage/'.$movie->image)}}" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                            <div class="pt-10 flex"><p class="pr-16">Current image:</p><img class="w-48" src="{{asset('storage/'.$movie->image)}}" alt="img"/></div>
                            @error('image')
                            <p class="text-red-500 text-lg mt-2">
                                {{$message}}
                            </p>
                            @enderror
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


</x-layout>
