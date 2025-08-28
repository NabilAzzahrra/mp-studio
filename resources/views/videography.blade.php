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
            <a href="{{ url('/videography') }}" class="font-bold text-sky-500">Videography</a>
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

    <div class="text-gray-500 text-center mt-4 mb-12">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur rerum sunt cumque hic ipsum quae sit! Ipsum
        dolore tenetur delectus incidunt explicabo, dicta natus aliquid autem quaerat qui quas voluptate accusamus
        nesciunt voluptatum doloribus asperiores possimus voluptas ratione quam porro quibusdam, vero optio nam? Est
        eveniet id voluptatibus quaerat velit.
    </div>
    {{-- MAIN CONTENT --}}
    <main class="mt-12 mb-20">
        <div class="flex items-start flex-1">
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/xAM4CgblQLU" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Harry Vaughan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>

            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/_6sZobZkNv0" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Flavio Zaviera - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/xQknAlRnaM4" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">William Roberts - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/7aKsPwH1iss" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Ciara Brosnan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/8u1LGaJ2fyA" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Cantika Putri Kirana - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/Yv1q7BclU0M" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Yoona Gimenez - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
        </div>
        <div class="flex items-start flex-1">
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/mZ_WLcJXGNc" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Harry Vaughan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>

            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/qsUJCebuKYs" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Flavio Zaviera - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/zuZgbfGxuc0" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">William Roberts - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/-rCD-ayNRhs" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Ciara Brosnan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/O2U5Rhp2HDE" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Cantika Putri Kirana - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/HW_mjS9Pq5E" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Yoona Gimenez - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
        </div>
        <div class="flex items-start flex-1">
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/tanc_8AXAkg" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Harry Vaughan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>

            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/aE7a5X4KgDc" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Flavio Zaviera - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/Vw7ah7npm7I" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">William Roberts - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/M6TLMVVgdOk" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Ciara Brosnan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/xG-STc-JDxk" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Cantika Putri Kirana - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/RwPQKHxnAdM" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Yoona Gimenez - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
        </div>
        <div class="flex items-start flex-1">
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/e2n4oQZs6nM" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Harry Vaughan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>

            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/umaUtG8THkQ" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Flavio Zaviera - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/AcPnTEC5Z6c" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">William Roberts - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/ojFrPxzrtOY" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Ciara Brosnan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/ojFrPxzrtOY" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Cantika Putri Kirana - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/RwPQKHxnAdM" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Yoona Gimenez - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
        </div>
        <div class="flex items-start flex-1">
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/e2n4oQZs6nM" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Harry Vaughan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>

            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/umaUtG8THkQ" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Flavio Zaviera - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/AcPnTEC5Z6c" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">William Roberts - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/ojFrPxzrtOY" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Ciara Brosnan - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/ojFrPxzrtOY" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Cantika Putri Kirana - MP01</div>
                    <div class="text-sm">PHOTOGRAPHY</div>
                </div>
            </div>
            <div class="relative inline-block group w-60">
                <iframe class="block w-full h-96" src="https://www.youtube.com/embed/RwPQKHxnAdM" frameborder="0"
                    allowfullscreen>
                </iframe>

                <!-- Overlay teks -->
                <div
                    class="absolute inset-0 bg-black/50 flex flex-col items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <div class="font-semibold">Yoona Gimenez - MP01</div>
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
