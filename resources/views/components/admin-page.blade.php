<!doctype HTML>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<body class="bg-blue-50" >


<div>
    <div class="m-10">
       <div class="flex">
           <a class="hover:bg-blue-700 bg-blue-100 font-mono p-2 rounded" href="/admin/movies/create/">Create Post</a>
               <a class="hover:bg-blue-700 bg-blue-100 font-mono ml-10 bg-red-100 p-2 rounded" href="admin/">All Posts</a>

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
            <div class="mt-4"> <a class="hover:bg-green-500 font-mono bg-green-200 p-2 rounded" href="admin/movies/edit/{id}">Edit</a>
                <a class="hover:bg-red-500 font-mono bg-red-200 ml-4 p-2 rounded" href="#">Delete</a></div>
        </div>
   @endforeach

</div>
</body>
