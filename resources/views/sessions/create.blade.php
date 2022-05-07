<!doctype HTML>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<body class="bg-gray-500">
<div class="w-full flex justify-center pt-20">
    <div class="max-w-sm">
        <div class="items-center pb-40">
            <div class="text-center">

                </div>
            <h1 class="text-cyan-400 text-3xl underline-offset-1 py-10"> Log In</h1>
               <form method="POST" action="/sessions">
                   @csrf
                   <div class="mb-6">
                  <label for="email"/>
                   <input name="email" type="email" autocomplete="email" id="email"  class="p-3" placeholder="Email"/>
                 @error('email')
                   <p class="text-red-500 text-lg mt-1">{{ $message }}</p>
                   @enderror
                   </div>


                   <div>
                       <label for="password"/>
                       <input name="password" type="password" autocomplete="password" id="password"  class="p-3" placeholder="password"/>
                       @error('password')
                       <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                       @enderror
                   </div>



                   <div>
                       <button class="mt-6 text-2xl bg-red-400 hover:bg-amber-300 px-4 rounded">Submit</button>
                   </div>

               </form>

            </div>
        </div>
    </div>

</body>
