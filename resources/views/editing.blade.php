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

<body class="font-[Poppins] flex flex-col justify-between px-60">

    {{-- NAVBAR --}}
    <header class="flex items-center justify-between w-full py-4">
        <div>
            <img src="{{ asset('img/mp.png') }}" class="w-32 mt-2">
        </div>
        <div class="flex gap-5">
            <a href="{{ url('/photography') }}" class="font-bold text-sky-700">Photography</a>
            <a href="{{ url('/videography') }}" class="font-bold text-sky-700">Videography</a>
            <a href="{{ url('/editing') }}" class="font-bold text-sky-500">Editing</a>
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

    <div class="text-gray-500 text-center mt-4 mb-12">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur rerum sunt cumque hic ipsum quae sit! Ipsum
        dolore tenetur delectus incidunt explicabo, dicta natus aliquid autem quaerat qui quas voluptate accusamus
        nesciunt voluptatum doloribus asperiores possimus voluptas ratione quam porro quibusdam, vero optio nam? Est
        eveniet id voluptatibus quaerat velit.
    </div>
    {{-- MAIN CONTENT --}}
    <main class="mt-12 mb-20">
        <div class="flex items-start flex-1">
            <div class="relative w-60 group">
                <img src="{{ asset('img/photography/1.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Harry Vaughan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative group w-60">
                <img src="{{ asset('img/photography/2.jpeg') }}" class="w-full h-auto block">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Flavio Zaviera - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group">
                <img src="{{ asset('img/photography/3.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">William Roberts - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group">
                <img src="{{ asset('img/photography/4.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Ciara Brosnan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group">
                <img src="{{ asset('img/photography/5.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Cantika Putri Kirana - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group">
                <img src="{{ asset('img/photography/6.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Yoona Gimenez - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
        </div>
        <div class="flex items-start flex-1">
            <div class="relative group w-60">
                <img src="{{ asset('img/photography/7.jpeg') }}" class="w-full h-auto block">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Nabila Azzahra - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-32">
                <img src="{{ asset('img/photography/8.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Arya Mohan - MP03</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group">
                <img src="{{ asset('img/photography/9.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Fattah Syach - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-10">
                <img src="{{ asset('img/photography/10.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Aqeela Calista - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group">
                <img src="{{ asset('img/photography/11.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Nicole Rossi - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-32">
                <img src="{{ asset('img/photography/12.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Raisa Marie - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
        </div>
        <div class="flex items-start flex-1">
            <div class="relative group w-60 -mt-10">
                <img src="{{ asset('img/photography/13.jpeg') }}" class="w-full h-auto block">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Noel Londok - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-32">
                <img src="{{ asset('img/photography/14.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Gema Vyandra - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-10">
                <img src="{{ asset('img/photography/15.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Jefan Nathanio - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-20">
                <img src="{{ asset('img/photography/16.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Sandrinna Michelle - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group">
                <img src="{{ asset('img/photography/17.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Luz Victoria - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-44">
                <img src="{{ asset('img/photography/18.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Jolina - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
        </div>
        <div class="flex items-start flex-1">
            <div class="relative group w-60 -mt-32">
                <img src="{{ asset('img/photography/19.jpeg') }}" class="w-full h-auto block">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Vania Priscilla - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-36">
                <img src="{{ asset('img/photography/20.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Electra Leslie - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-20">
                <img src="{{ asset('img/photography/21.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Montserrat Gizelle - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-44">
                <img src="{{ asset('img/photography/22.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Najwa Shakira - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group">
                <img src="{{ asset('img/photography/23.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Yudetra Atala Jinan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-48">
                <img src="{{ asset('img/photography/24.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Andro Trinanda - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
        </div>
        <div class="flex items-start flex-1">
            <div class="relative group w-60 -mt-80">
                <img src="{{ asset('img/photography/25.jpeg') }}" class="w-full h-auto block">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Audy Maulidyna - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-[350px]">
                <img src="{{ asset('img/photography/26.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Siffa Aditya - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-[287px]">
                <img src="{{ asset('img/photography/27.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Dava Nurs - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-[287px]">
                <img src="{{ asset('img/photography/28.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Diva Nurs - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group">
                <img src="{{ asset('img/photography/29.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Egidius Edit - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative w-60 group -mt-[400px]">
                <img src="{{ asset('img/photography/30.jpeg') }}" class="w-60">

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Alfariz - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
        </div>
    </main>
    <footer class="flex gap-10 items-center justify-center pb-14">
        <img src="{{ asset('img/lp3i.png') }}" class="h-14">
        <img src="{{ asset('img/gmu.png') }}" class="h-14">
        <img src="{{ asset('img/tagline.svg') }}" class="h-14">
    </footer>
    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
</body>

</html>
