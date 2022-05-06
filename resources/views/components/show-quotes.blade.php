<!doctype HTML>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<body class="bg-gray-500">
<div class="w-full flex justify-center pt-20">
    <div class="max-w-sm">
        <div class="items-center pb-40">

            <div class="text-center">
              <div>
                  <p class="pb-20 text-white text-3xl">{{ $movie->name }}</p>
              </div>
             <div>
                @foreach($movie->quotes as $quote)
                    <div class="my-12">
                        <img src="{{ $quote->image }}" alt="img">
                        <p class="py-4 bg-red-50 rounded"> {{$quote->name}}</p>

                    </div>
                @endforeach
             </div>







            </div>
        </div>


    </div>
</div>

</body>
