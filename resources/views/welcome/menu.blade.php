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
    <div class="konten relative min-h-screen w-full p-4 flex flex-col items-center overflow-hidden">
        <audio src="{{ Vite::asset("resources/img/select2.mp3") }}" id="click-sound" class="hidden"></audio>
        <img src="{{ Vite::asset('resources/img/meteorid.png') }}" id="meteorid"
            class="absolute inset-0 w-full h-full object-cover z-[100]">
        <h1
            class="relative text-2xl md:text-4xl lg:text-[3em] text-white tracking-wider text-center drop-shadow-[3px_3px_10px_rgba(255,255,255,0.5)] mt-24 mb-12 z-[2000]">
            Kelas Kosmik
        </h1>

        <div class="relative z-[2000] w-full max-w-7xl px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="space-y-8">
                    <a href="tatasurya.html" data-sound="true" class="menu-link block group">
                        <div
                            class="bg-[#ef9ff3]/90 hover:bg-[#bbd1f5] p-6 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
                            <div class="text-center space-y-4">
                                <img src="{{ Vite::asset('resources/img/icons/solar-system.png') }}"
                                    class="w-16 h-16 mx-auto transform group-hover:rotate-12 transition-transform duration-300"
                                    alt="Solar System">
                                <h3 class="text-xl font-bold text-[#38073b] group-hover:text-[#051b3f] tracking-wider">
                                    Jelajah Tata Surya 🌌</h3>
                                <p class="text-sm text-[#38073b]/80 group-hover:text-[#051b3f]/80">Eksplorasi
                                    planet-planet
                                    dan objek langit dalam tata surya kita</p>
                                <span class="loading-text hidden">Memuat...</span>
                            </div>
                        </div>
                    </a>
                    <a href="fenomena.html" data-sound="true" class="menu-link block group">
                        <div
                            class="bg-[#ef9ff3]/90 hover:bg-[#bbd1f5] p-6 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
                            <div class="text-center space-y-4">
                                <img src="{{ Vite::asset('resources/img/icons/space-phenomena.png') }}"
                                    class="w-16 h-16 mx-auto transform group-hover:rotate-12 transition-transform duration-300"
                                    alt="Space Phenomena">
                                <h3 class="text-xl font-bold text-[#38073b] group-hover:text-[#051b3f] tracking-wider">
                                    Fenomena Luar Angkasa 🛸</h3>
                                <p class="text-sm text-[#38073b]/80 group-hover:text-[#051b3f]/80">Pelajari fenomena
                                    menarik
                                    yang terjadi di luar angkasa</p>
                                <span class="loading-text hidden">Memuat...</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="space-y-8">
                    <a href="bumi-satelit.html" data-sound="true" class="menu-link block group">
                        <div
                            class="bg-[#ef9ff3]/90 hover:bg-[#bbd1f5] p-6 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
                            <div class="text-center space-y-4">
                                <img src="{{ Vite::asset('resources/img/icons/earth-moon.png') }}"
                                    class="w-16 h-16 mx-auto transform group-hover:-translate-y-1 transition-transform duration-300"
                                    alt="Earth and Moon">
                                <h3 class="text-xl font-bold text-[#38073b] group-hover:text-[#051b3f] tracking-wider">
                                    Bumi
                                    dan Satelitnya 🌍</h3>
                                <p class="text-sm text-[#38073b]/80 group-hover:text-[#051b3f]/80">Pelajari tentang
                                    planet
                                    kita dan bulan yang setia menemaninya</p>
                                <div class="flex justify-center items-center space-x-2 text-[#38073b]/60 text-xs mt-2">
                                    <span>✨ Artikel Interaktif</span>
                                    <span>•</span>
                                    <span>🎯 Aktivitas</span>
                                </div>
                                <span class="loading-text hidden">Memuat...</span>
                            </div>
                        </div>
                    </a>
                    <a href="teori-tatasurya.html" data-sound="true" class="menu-link block group">
                        <div
                            class="bg-[#ef9ff3]/90 hover:bg-[#bbd1f5] p-6 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
                            <div class="text-center space-y-4">
                                <img src="{{ Vite::asset('resources/img/icons/solar-system-theory.png') }}"
                                    class="w-16 h-16 mx-auto transform group-hover:rotate-12 transition-transform duration-300"
                                    alt="Solar System Theory">
                                <h3 class="text-xl font-bold text-[#38073b] group-hover:text-[#051b3f] tracking-wider">
                                    Teori
                                    Terbentuknya Tata Surya ☄️</h3>
                                <p class="text-sm text-[#38073b]/80 group-hover:text-[#051b3f]/80">Pelajari teori-teori
                                    tentang bagaimana tata surya kita terbentuk</p>
                                <span class="loading-text hidden">Memuat...</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="space-y-8">
                    <a href="misi-bulan.html" data-sound="true" class="menu-link block group">
                        <div
                            class="bg-[#ef9ff3]/90 hover:bg-[#bbd1f5] p-6 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
                            <div class="text-center space-y-4">
                                <img src="{{ Vite::asset('resources/img/icons/moon-mission.png') }}"
                                    class="w-16 h-16 mx-auto transform group-hover:rotate-12 transition-transform duration-300"
                                    alt="Moon Mission">
                                <h3 class="text-xl font-bold text-[#38073b] group-hover:text-[#051b3f] tracking-wider">
                                    Misi
                                    ke Bulan 🌕</h3>
                                <p class="text-sm text-[#38073b]/80 group-hover:text-[#051b3f]/80">Ikuti perjalanan
                                    manusia
                                    ke bulan dan misi-misi luar angkasa lainnya</p>
                                <span class="loading-text hidden">Memuat...</span>
                            </div>
                        </div>
                    </a>
                    <a href="kuis.html" data-sound="true" class="menu-link block group">
                        <div
                            class="bg-[#ef9ff3]/90 hover:bg-[#bbd1f5] p-6 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 transition-all duration-300">
                            <div class="text-center space-y-4">
                                <img src="{{ Vite::asset('resources/img/icons/quiz.png') }}"
                                    class="w-16 h-16 mx-auto transform group-hover:rotate-12 transition-transform duration-300"
                                    alt="Quiz">
                                <h3 class="text-xl font-bold text-[#38073b] group-hover:text-[#051b3f] tracking-wider">
                                    Kuis
                                    bersama Astro 🪐</h3>
                                <p class="text-sm text-[#38073b]/80 group-hover:text-[#051b3f]/80">Uji pengetahuanmu
                                    tentang
                                    luar angkasa dengan kuis seru</p>
                                <span class="loading-text hidden">Memuat...</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-8 left-0 right-0 text-center text-white/70 text-sm">
            <p>Pilih topik yang ingin kamu pelajari! 🚀</p>
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
