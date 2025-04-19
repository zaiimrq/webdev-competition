<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas Kosmik</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/custom.js'])
    <style>
        .paralax::before {
            content: "";
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to top, rgb(196 196 195), transparent);
            z-index: 1000;
        }

        .cursor-glow {
            cursor: pointer;
            transition: filter 0.3s;
        }

        .cursor-glow:hover {
            filter: drop-shadow(0 0 8px rgba(255, 255, 255, 0.6));
        }

        .login-button {
            animation: fadeIn 0.5s ease-out;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .login-button:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(56, 7, 59, 0.8);
        }

        .login-button:active {
            transform: scale(0.95);
        }

        .login-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease-out, height 0.6s ease-out;
        }

        .login-button:active::after {
            width: 200%;
            height: 200%;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <link rel="preload" as="image" href="{{ Vite::asset('resources/img/stars.png') }}">
    <link rel="preload" as="image" href="{{ Vite::asset('resources/img/meteorid.png') }}">
    <link rel="preload" as="image" href="{{ Vite::asset('resources/img/rocket.png') }}">
</head>

<body class="bg-gradient-to-b from-black to-purple-950 font-['Acme'] scroll-smooth">
    <div class="fixed top-4 right-4 md:top-8 md:right-8 z-[1001]">
        <a wire:navigate href="/login"
           class="login-button inline-flex items-center px-6 py-2 bg-[#38073b] text-white rounded-full hover:bg-opacity-90 transition-all duration-300 text-sm md:text-base">
            <span>Login</span>
        </a>
    </div>
    <div
        class="paralax relative h-[150vh] w-full p-4 md:p-[150px] lg:p-[250px] flex justify-center items-center overflow-hidden">
        <img src="{{ Vite::asset('resources/img/stars.png') }}" id="stars"
            class="absolute inset-0 w-full h-full object-cover transition-all duration-700 ease-out">
        <img src="{{ Vite::asset('resources/img/meteorid.png') }}" id="meteorid"
            class="absolute inset-0 w-full h-full object-cover z-[100] transition-all duration-1000 ease-out cursor-glow">
        <img src="{{ Vite::asset('resources/img/rocket.png') }}" id="rocket"
            class="absolute inset-0 w-full h-full object-cover transition-all duration-1000 ease-out cursor-glow hover:scale-110">
        <h1 id="text"
            class="absolute -bottom-[100px] text-2xl md:text-4xl lg:text-[4.8em] text-white tracking-wider text-center drop-shadow-[3px_3px_10px_rgba(128,128,128,1)] z-50 transition-all duration-1000 ease-out">
            Selamat Datang <br>di Kelas Kosmik!
        </h1>
    </div>

    <div class="relative bg-[#c4c2c3] py-20 md:py-40">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-center gap-8 md:gap-12">
            <div class="w-full md:w-1/2" data-aos="zoom-in-right" data-aos-duration="500"
                data-aos-easing="ease-in-out">
                <img src="{{ Vite::asset('resources/img/png/astro2.png') }}" id="astro"
                    class="w-full md:w-4/5 mx-auto transition-all duration-500 ease-in-out hover:scale-110">
            </div>
            <div class="w-full md:w-1/2 text-center md:text-left px-4" data-aos="zoom-in-left" data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4 md:mb-6">Bergabunglah dengan Astro dalam
                    Petualangan Luar Angkasa! 🚀</h2>
                <p class="text-base md:text-lg mb-6 md:mb-8">
                    Halo, Aku Astro!🌟<br>
                    Bersama-sama, mari kita menjelajahi keajaiban tata surya!<br>
                    Di sini, kamu akan menemukan dunia yang penuh dengan bintang, planet, dan misteri kosmik yang
                    menunggu untuk diungkap!
                </p>
                <a wire:navigate href="/menu" id="button"
                    class="inline-block px-8 md:px-12 py-2 md:py-3 bg-[#38073b] text-white rounded-full hover:opacity-90 transition-all duration-300 text-sm md:text-base">
                    Ayo Mulai! 🚀
                </a>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 100,
            duration: 1000
        });

        // Smooth scroll polyfill
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
    @vite('resources/js/parallax.js')
</body>

</html>
