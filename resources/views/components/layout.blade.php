<!doctype HTML>
<head>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="{{asset('css/app.css')}}" rel="stylesheet"/>
<link href="http://fonts.cdnfonts.com/css/sansation" rel="stylesheet">
    <title>{{__('translate.Movie Quotes')}}</title>
</head>

<body class="bg-onepiece font-sansation">
@auth()
    <div class="mt-4 flex justify-end">

           <div class="hover:bg-red-300 px-3.5 bg-red-50 rounded-xl">
            <a href="/admin" class="text-xl">{{__('translate.Admin_Panel')}}</a>
        </div>

        <form method="POST" action="/logout">
            @csrf

            <div class="hover:bg-red-300 mx-20 bg-red-50 px-3.5 rounded-xl">
                <button type="submit" class="text-xl">{{__('translate.Log_Out')}}</button>
            </div>

        </form>
</div>
@endauth

<div class="fixed mt-80 ml-4 ">
    <div class="mb-2">
        <a href='/set-locale/en' class="{{app()->getLocale() === 'en' ? 'p-1 border rounded-3xl text-black text-lg bg-white' : 'p-1 border rounded-3xl text-white text-lg'}}">{{__('translate.en')}}</a>
    </div>

    <div>
        <a href='/set-locale/ka' class="{{app()->getLocale() === 'ka' ? 'p-1 border rounded-3xl text-black text-lg bg-white' : 'p-1 border rounded-3xl text-white text-lg'}}">{{__('translate.ka')}}</a>
    </div>
</div>

         {{ $slot }}

        @if(session()->has('success'))
            <div
                class="fixed bg-blue-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
                <p>{{session('success')}}</p>
            </div>
        @endif

</body>
