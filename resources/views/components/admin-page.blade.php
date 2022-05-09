<!doctype HTML>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<body class="bg-blue-50" >


<div>
    <div class="m-10">
       <div class="flex">
           <a class="hover:bg-blue-700 bg-blue-100 font-mono p-2 rounded" href="/admin/movies/create/">Create Movie</a>
               <a class="hover:bg-blue-700 bg-blue-100 mx-10 font-mono bg-red-100 p-2 rounded" href="/admin/">All Movies</a>
           <a class="hover:bg-blue-700 bg-blue-100 font-mono mx-auto justify-end flex p-2 rounded" href="/">Back on main page</a>
       </div>
    </div>



   @foreach($movies as $movie)

        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">

            <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <div class="group">
                    <div class="aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                        <img src="{{asset('storage/'.$movie->image)}}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">{{$movie->name}}</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">{{$movie->quotes[0]->quote}}</p>
                </div>
                <!-- More products... -->
            </div>
            <div class="mt-4"> <a class="hover:bg-green-500 font-mono bg-green-200 p-2 rounded" href="/admin/movie/{{$movie->id}}/edit">Edit</a>
                <a class="hover:bg-red-500 font-mono bg-red-200 mx-10 p-2 rounded" href="#">Delete</a></div>
        </div>


        <div class="px-4 sm:px-6 lg:px-8 border-b-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">{{$movie->name}} all Quotes</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all quotes of movie called {{$movie->name}}</p>
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
{{--                    <a class="hover:bg-blue-700 bg-blue-100 mx-10 font-mono p-2 rounded" href="/admin/movies/{{$movie->id}}">Add Quote</a>--}}
                    <a href="/admin/movies/{{$movie->id}}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add New Quote</a>
                </div>
            </div>
            <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Movie</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Movie ID</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Quote</th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Quote ID</th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                @foreach($movie->quotes as $quote)
                                <tr>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{$movie->name}}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$movie->id}}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$quote->quote}}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$quote->id}}</td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        <a href="#" class="mx-4 text-indigo-600 hover:text-indigo-900">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                                <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   @endforeach
</div>
</body>
