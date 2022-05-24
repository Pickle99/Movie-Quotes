<x-layout>
    <div class="m-40">
        <div class="px-4 sm:px-6 lg:px-8 border-b-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <p class="mt-2 text-sm text-gray-400">{{__('translate.A list of all quotes for movie')}} {{$movie->name}}</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <a href="/admin/movies/{{$movie->id}}/quotes/create" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">{{__('translate.Add new quote')}}</a>
                </div>
            </div>
            <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">{{__('translate.Quote')}}</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">{{__('translate.Quote ID')}}</th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                        <span class="sr-only">{{__('translate.Edit')}}</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach($quotes as $quote)
                                    <tr>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$quote->title}}</td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$quote->id}}</td>
                                        <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                            <div class="flex">  <a href="/admin/quotes/{{$quote->id}}/edit" class="text-indigo-600 hover:text-indigo-900">{{__('translate.Edit')}}</a>
                                                <form class="mx-4 text-red-700 hover:text-indigo-900" method="POST" action="/admin/{{$quote->id}}/quotes">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit">{{__('translate.Delete')}}</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
