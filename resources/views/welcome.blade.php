<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MP | STUDIO</title>
    {{-- TAILWINDCSS --}}
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    {{-- FONT --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    {{-- FLATICON --}}
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/3.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
</head>

<body class="font-[Poppins] h-screen w-screen overflow-hidden flex flex-col justify-between px-60">

    {{-- NAVBAR --}}
    <header class="flex items-center justify-between w-full py-4">
        <div>
            <img src="{{ asset('img/mp.png') }}" class="w-32 mt-2">
        </div>
        <div class="flex gap-5">
            <a href="{{ url('/photography') }}" class="font-bold text-sky-700">Photography</a>
            <a href="{{ url('/videography') }}" class="font-bold text-sky-700">Videography</a>
            <a href="{{ url('/editing') }}" class="font-bold text-sky-700">Editing</a>
        </div>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">
                    <div
                        class="bg-sky-50 px-4 py-2 border border-sky-500 rounded-full flex items-center justify-center gap-2 w-[150px] shadow-md hover:bg-sky-100 transition">
                        <span class="leading-none text-sky-700 font-bold">Login</span>
                        <i class="fi fi-br-arrow-right text-base leading-none flex items-center"></i>
                    </div>
                </a>
            @else
                <a href="{{ route('login') }}">
                    <div
                        class="bg-sky-50 px-4 py-2 border mr-44 border-sky-500 rounded-full flex items-center justify-center gap-2 w-[150px] shadow-md hover:bg-sky-100 transition">
                        <span class="leading-none text-sky-700 font-bold">Login</span>
                        <i class="fi fi-br-arrow-right text-base leading-none flex items-center"></i>
                    </div>
                </a>
            @endauth
        @endif
    </header>

    {{-- MAIN CONTENT --}}
    <main class="flex flex-1 items-center justify-center gap-10">
        <div class="w-1/2">
            <div class="font-bold text-[100px] leading-tight">STUDIO ~</div>
            <div class="flex gap-6 mt-6">
                <div>
                    <div class="font-bold text-xl">Photography</div>
                    <div class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                </div>
                <div>
                    <div class="font-bold text-xl">Videography</div>
                    <div class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                </div>
                <div>
                    <div class="font-bold text-xl">Editing</div>
                    <div class="text-sm text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                </div>
            </div>
        </div>
        <div class="w-1/2 flex justify-center">
            <dotlottie-wc src="{{ asset('json/Developer.json') }}" style="width: 450px;height: 450px" speed="1"
                autoplay loop></dotlottie-wc>
        </div>
    </main>

    {{-- FOOTER LOGOS --}}
    <footer class="flex gap-10 items-center justify-center pb-20">
        <img src="{{ asset('img/lp3i.png') }}" class="h-14">
        <img src="{{ asset('img/gmu.png') }}" class="h-14">
        <img src="{{ asset('img/tagline.svg') }}" class="h-14">
    </footer>

    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
</body>

</html>
