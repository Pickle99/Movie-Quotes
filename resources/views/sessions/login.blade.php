<x-layout>
    <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8 mt-20">
        <div class="sm:mx-auto sm:w-full sm:max-w-md mb-20">
            <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form class="space-y-6" action="/login" method="POST">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">{{__('translate.Email address')}} </label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" value="{{old('email')}}" autocomplete="email" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        @error('email')
                        <p class="text-red-500 text-lg mt-1">{{ __("translate.$message") }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700"> {{__('translate.password')}} </label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>


                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">{{__('translate.sign')}}</button>
                    </div>
                </form>



                    </div>
                </div>
            </div>

</x-layout>
