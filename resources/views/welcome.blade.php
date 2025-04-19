<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas Kosmik</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Remove all custom styles except this one */
        .paralax::before {
            content: "";
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to top, rgb(196 196 195), transparent);
            z-index: 1000;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-black to-purple-950 font-['Acme'] scroll-smooth">
    <div class="paralax relative h-[200vh] w-full p-[300px] flex justify-center items-center overflow-hidden">
        <img src="{{ Vite::asset('resources/img/stars.png') }}" id="stars"
            class="absolute inset-0 w-full h-full object-cover transition-all duration-200">
        <img src="{{ Vite::asset('resources/img/meteorid.png') }}" id="meteorid"
            class="absolute inset-0 w-full h-full object-cover z-[100] transition-all duration-200">
        <img src="{{ Vite::asset('resources/img/rocket.png') }}" id="rocket"
            class="absolute inset-0 w-full h-full object-cover transition-all duration-200">
        <h1 id="text"
            class="absolute -bottom-[100px] text-[4.8em] text-white tracking-wider text-center drop-shadow-[3px_3px_10px_rgba(128,128,128,1)] z-50 transition-all duration-200">
            Selamat Datang <br>di Kelas Kosmik!
        </h1>
    </div>

    <div class="relative bg-[#c4c2c3] py-40">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-center gap-12">
            <div class="w-full md:w-1/2" data-aos="zoom-in-right" data-aos-duration="1000">
                <img src="{{ Vite::asset('resources/img/png/astro2.png') }}" id="astro"
                    class="w-4/5 mx-auto transition-transform duration-100">
            </div>
            <div class="w-full md:w-1/2" data-aos="zoom-in-left" data-aos-duration="1500">
                <h2 class="text-4xl font-bold mb-6">Bergabunglah dengan Astro dalam Petualangan Luar Angkasa! 🚀</h2>
                <p class="text-lg mb-8">
                    Halo, Aku Astro!🌟<br>
                    Bersama-sama, mari kita menjelajahi keajaiban tata surya!<br>
                    Di sini, kamu akan menemukan dunia yang penuh dengan bintang, planet, dan misteri kosmik yang
                    menunggu untuk diungkap!
                </p>
                <a href="/dashboard" id="button"
                    class="inline-block px-12 py-3 bg-[#38073b] text-white rounded-full hover:opacity-90 transition-all duration-300">
                    Ayo Mulai! 🚀
                </a>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @vite('resources/js/parallax.js')
</body>

</html>
