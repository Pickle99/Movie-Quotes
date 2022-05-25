<x-layout>
<div>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
        </div>
        <div class="flex mt-40">
            <form method="POST" action="/admin/{{$quote->id}}/quotes" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="w-96">
                            <label for="quote" class="block text-sm font-medium text-gray-700"> {{__('translate.English_quote_name')}}</label>
                            <div class="mt-1">
                                <textarea id="quote" name="quote_en" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$quote->getTranslation('title', 'en')}}
                                </textarea>
                            </div>
                            @error('quote_en')
                            <p class="text-red-500 text-lg mt-2">
                                {{ __("translate.$message")}}
                            </p>
                            @enderror
                        </div>
                        <div class="w-96">
                            <label for="quote" class="block text-sm font-medium text-gray-700"> {{__('translate.Georgian_quote_name')}}</label>
                            <div class="mt-1">
                                <textarea id="quote" name="quote_ka" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md">{{$quote->getTranslation('title', 'ka')}}
                                </textarea>
                            </div>
                            @error('quote_ka')
                            <p class="text-red-500 text-lg mt-2">
                                {{ __("translate.$message")}}
                              </p>
                              @enderror
                          </div>


                      </div>
                      <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                          <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">{{__('translate.save')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</x-layout>
