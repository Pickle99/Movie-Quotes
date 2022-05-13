<!doctype HTML>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<body class="bg-gray-100">

<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0 w-full ml-96">
                <h3 class="text-lg font-medium leading-6 text-gray-900 text-center mt-10">Quote (Id: {{$quote->id}}) Edit</h3>
            </div>
        </div>
        <div class="flex mt-40">
            <form method="POST" action="/admin/quote/{{$quote->id}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="w-96">
                            <label for="title_en" class="block text-sm font-medium text-gray-700"> Quote En </label>
                            <div class="mt-1">
                                <textarea id="title_en" name="title_en" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$quote->getTranslation('title', 'title_en')}}
                                </textarea>
                            </div>
                            @error('title_en')
                            <p class="text-red-500 text-lg mt-2">
                                {{$message}}
                            </p>
                            @enderror
                        </div>

                        <div class="w-96">
                            <label for="title_ka" class="block text-sm font-medium text-gray-700"> Quote Ka </label>
                            <div class="mt-1">
                                <textarea id="title_ka" name="title_ka" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$quote->getTranslation('title', 'title_ka')}}
                                </textarea>
                            </div>
                            @error('title_ka')
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


</body>
