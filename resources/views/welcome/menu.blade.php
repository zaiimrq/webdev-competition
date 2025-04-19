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
        .konten::before {
            content: "";
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to top, #c4c2c3, transparent);
            z-index: 1000;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-black to-purple-950 font-['Acme'] scroll-smooth">
    <a wire:navigate href="/"
        class="fixed top-8 left-8 z-[3000] bg-[#ef9ff3] hover:bg-[#bbd1f5] px-6 py-2 rounded-full text-[#38073b] hover:text-[#051b3f] transition-all duration-300 shadow-lg hover:scale-105">
        ← Back
    </a>
    <div class="konten relative h-screen w-full p-4 md:p-[300px] flex justify-center items-center overflow-hidden">
        <audio src="{{ Vite::asset("resources/img/select2.mp3") }}" id="click-sound" class="hidden"></audio>
        <img src="{{ Vite::asset('resources/img/meteorid.png') }}" id="meteorid"
            class="absolute inset-0 w-full h-full object-cover z-[100]">
        <h1
            class="absolute text-2xl md:text-4xl lg:text-[3em] text-white tracking-wider text-center drop-shadow-[3px_3px_10px_rgba(255,255,255,0.5)] top-[70px] z-[2000]">
            Kelas Kosmik<br>
        </h1>

        <div class="relative z-[2000] w-full max-w-7xl mt-5 grid grid-cols-1 md:grid-cols-3 gap-5 px-4">
            <div class="space-y-5">
                <a href="tatasurya.html" data-sound="true" class="menu-link block">
                    <div
                        class="bg-[#ef9ff3] hover:bg-[#bbd1f5] p-4 rounded-lg shadow-lg hover:scale-105 transition-all duration-300 text-center text-[#38073b] hover:text-[#051b3f] tracking-wider">
                        <span class="loading-text hidden">Loading...</span>
                        <span class="content-text">Jelajah Tata Surya 🌌</span>
                    </div>
                </a>
                <a href="fenomena.html" data-sound="true" class="menu-link block">
                    <div
                        class="bg-[#ef9ff3] hover:bg-[#bbd1f5] p-4 rounded-lg shadow-lg hover:scale-105 transition-all duration-300 text-center text-[#38073b] hover:text-[#051b3f] tracking-wider">
                        <span class="loading-text hidden">Loading...</span>
                        <span class="content-text">Fenomena Luar Angkasa 🛸</span>
                    </div>
                </a>
            </div>

            <div class="space-y-5">
                <a href="bumi-satelit.html" data-sound="true" class="menu-link block">
                    <div
                        class="bg-[#ef9ff3] hover:bg-[#bbd1f5] p-4 rounded-lg shadow-lg hover:scale-105 transition-all duration-300 text-center text-[#38073b] hover:text-[#051b3f] tracking-wider">
                        <span class="loading-text hidden">Loading...</span>
                        <span class="content-text">Bumi dan Satelitnya 🌍</span>
                    </div>
                </a>
                <a href="teori-tatasurya.html" data-sound="true" class="menu-link block">
                    <div
                        class="bg-[#ef9ff3] hover:bg-[#bbd1f5] p-4 rounded-lg shadow-lg hover:scale-105 transition-all duration-300 text-center text-[#38073b] hover:text-[#051b3f] tracking-wider">
                        <span class="loading-text hidden">Loading...</span>
                        <span class="content-text">Teori Terbentuknya Tata Surya ☄️</span>
                    </div>
                </a>
            </div>

            <div class="space-y-5">
                <a href="misi-bulan.html" data-sound="true" class="menu-link block">
                    <div
                        class="bg-[#ef9ff3] hover:bg-[#bbd1f5] p-4 rounded-lg shadow-lg hover:scale-105 transition-all duration-300 text-center text-[#38073b] hover:text-[#051b3f] tracking-wider">
                        <span class="loading-text hidden">Loading...</span>
                        <span class="content-text">Misi ke Bulan 🌕</span>
                    </div>
                </a>
                <a href="kuis.html" data-sound="true" class="menu-link block">
                    <div
                        class="bg-[#ef9ff3] hover:bg-[#bbd1f5] p-4 rounded-lg shadow-lg hover:scale-105 transition-all duration-300 text-center text-[#38073b] hover:text-[#051b3f] tracking-wider">
                        <span class="loading-text hidden">Loading...</span>
                        <span class="content-text">Kuis bersama Astro 🪐</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuLinks = document.querySelectorAll('.menu-link');

            async function playSound(event) {
                event.preventDefault();
                const link = event.currentTarget;
                const loadingText = link.querySelector('.loading-text');
                const contentText = link.querySelector('.content-text');

                try {
                    loadingText.classList.remove('hidden');
                    contentText.classList.add('hidden');

                    const audio = document.getElementById('click-sound');
                    if (!audio) throw new Error('Audio element not found');

                    await audio.play();

                    await new Promise((resolve) => {
                        audio.onended = resolve;
                    });

                    window.location.href = link.href;
                } catch (error) {
                    console.error('Audio playback failed:', error);
                    // Fallback: Navigate without sound
                    window.location.href = link.href;
                } finally {
                    loadingText.classList.add('hidden');
                    contentText.classList.remove('hidden');
                }
            }

            menuLinks.forEach(link => {
                if (link.dataset.sound) {
                    link.addEventListener('click', playSound);
                }
            });

            // Initialize AOS
            AOS.init({
                duration: 1000,
                once: true,
                offset: 100
            });
        });
    </script>
</body>

</html>
