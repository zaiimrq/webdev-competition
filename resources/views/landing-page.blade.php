<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriWise</title>
    @vite(['resources/css/app.css', 'resources/js/custom.js'])
    @livewireStyles()
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/feather-icons/dist/feather.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-green-50 to-teal-50">
    <!-- Navbar -->
    <nav class="fixed w-full z-50">
        <div class="absolute inset-0 bg-white/80 backdrop-blur-xl"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1
                        class="text-2xl font-bold bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                        NutriWise</h1>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="#features" class="text-gray-700 hover:text-teal-600 transition-colors">Fitur</a>
                    <a href="#benefits" class="text-gray-700 hover:text-teal-600 transition-colors">Keuntungan</a>
                    <a href="#about" class="text-gray-700 hover:text-teal-600 transition-colors">Tentang</a>
                    <div class="h-5 w-px bg-gray-300"></div>
                    <a wire:navigate href="/login" class="text-gray-700 hover:text-teal-600 transition-colors">Masuk</a>
                    <a wire:navigate href="/register"
                        class="bg-gradient-to-r from-green-600 to-teal-600 text-white px-6 py-2 rounded-full hover:shadow-lg transition-all">
                        Daftar
                    </a>
                </div>
                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button type="button" onclick="toggleMobileMenu()" class="text-gray-700 hover:text-green-600">
                        <svg class="h-6 w-6" id="menuIcon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6 hidden" id="closeIcon" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <!-- Mobile Menu -->
            <div class="hidden md:hidden absolute top-16 left-0 right-0 bg-white/95 backdrop-blur-xl border-b border-gray-200"
                id="mobileMenu">
                <div class="px-4 py-4 space-y-3">
                    <a href="#features"
                        class="block text-gray-700 hover:text-green-600 transition-colors py-2">Fitur</a>
                    <a href="#benefits"
                        class="block text-gray-700 hover:text-green-600 transition-colors py-2">Keuntungan</a>
                    <a href="#about"
                        class="block text-gray-700 hover:text-green-600 transition-colors py-2">Tentang</a>
                    <div class="h-px bg-gray-200 my-2"></div>
                    <a wire:navigate href="/login" class="block text-gray-700 hover:text-green-600 transition-colors py-2">Masuk</a>
                    <a wire:navigate href="/register"
                        class="block bg-gradient-to-r from-green-600 to-teal-600 text-white px-6 py-2 rounded-full text-center">
                        Daftar
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
<section class="min-h-screen flex items-center pt-16 bg-gradient-to-br from-green-50 to-teal-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <span class="px-4 py-2 rounded-full bg-green-100 text-green-600 text-sm font-medium">💡 Nutrisi Cerdas</span>
                <h1 class="mt-6 text-2xl md:text-4xl font-bold leading-tight text-gray-800">
                    Optimalkan Kesehatanmu<br> dengan Prediksi Kesehatan <br>
                    <span class="bg-gradient-to-r from-green-500 to-teal-500 bg-clip-text text-transparent">berbasis AI!</span>
                </h1>
                <p class="mt-4 text-lg text-gray-600">
                NutriWise membantu memahami pola konsumsi harian dan mengecek asupan gizi Anda menggunakan teknologi Machine Learning.🤖🍎
                </p>
                <div class="mt-8 flex gap-4">
                    <a wire:navigate href="/register" class="bg-gradient-to-r from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600 text-white px-8 py-3 rounded-full hover:shadow-lg transition-all shadow-md transform hover:scale-105 duration-300">
                    Mulai Sekarang 🍏
                    </a>
                    <a href="#features" class="group flex items-center gap-2 text-gray-600 hover:text-green-600 font-medium">
                        Jelajahi Fitur
                        <svg class="w-4 h-4 group-hover:translate-x-2 transition-transform" stroke="currentColor"
                            fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
            <div data-aos="fade-left" class="relative">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-green-200 to-teal-200 rounded-full filter blur-3xl opacity-30">
                </div>
                <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=600&h=400&fit=crop&auto=format"
                     alt="Healthy food"
                     class="relative z-10 rounded-2xl shadow-xl border-4 border-white">
            </div>
        </div>
    </div>
</section>

    <!-- Features -->
    <section id="features" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="px-4 py-2 rounded-full bg-teal-100 text-teal-600 text-sm font-medium">Kenapa Harus
                    Pakai?</span>
                <h2 class="mt-6 text-3xl font-bold">Semua yang Kamu Butuhkan! 🎯</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Card 1: Materi Edukasi -->
                <div data-aos="zoom-in"
                    class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl hover:shadow-lg transition-all border border-gray-100 hover:border-indigo-200 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-indigo-100 to-green-100 rounded-xl flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        <span class="text-2xl">📚</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-teal-600 transition-colors">Materi Edukasi</h3>
                    <p class="text-gray-600 mb-6">Pelajari berbagai Pengetahuan tentang Pola konsumsi dan Gizi dengan Lengkap di sini. Dari Zero to Hero dalam Pemahaman Gizi! 🚀</p>
                    <div class="flex flex-wrap gap-2 mb-6">
                    </div>
                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?w=400&h=300&fit=crop"
                        alt="Materi Edukasi"
                        class="w-full rounded-xl shadow-md group-hover:shadow-lg transition-shadow">
                </div>

                <!-- Card 2: Quiz Gizi -->
                <div data-aos="zoom-in" data-aos-delay="150"
                    class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl hover:shadow-lg transition-all border border-gray-100 hover:border-teal-200 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-teal-100 to-cyan-100 rounded-xl flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        <span class="text-2xl">✏️</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-teal-600 transition-colors">Quiz Gizi</h3>
                    <p class="text-gray-600 mb-6">Belajar gizi jadi seru! 🧠 Selesaikan Quiz Gizi dan Raih posisi teratas di Leaderboard! 🏆</p>
                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-teal-600 h-2.5 rounded-full" style="width: 75%"></div>
                            </div>
                            <span class="ml-2 text-sm text-gray-500">75% lengkap</span>
                        </div>
                        <p class="text-xs text-gray-500">3/4 pertanyaan terjawab</p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?w=400&h=300&fit=crop"
                        alt="Quiz Gizi"
                        class="w-full rounded-xl shadow-md group-hover:shadow-lg transition-shadow">
                </div>

                <!-- Card 3: Simulasi & Prediksi -->
                <div data-aos="zoom-in" data-aos-delay="300"
                    class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl hover:shadow-lg transition-all border border-gray-100 hover:border-green-200 group">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-100 to-teal-100 rounded-xl flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        <span class="text-2xl">🤖</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-green-600 transition-colors">Simulasi & Prediksi</h3>
                    <p class="text-gray-600 mb-6">Desain piring makan idealmu secara digital! 🍽️ Langsung lihat analisis gizi dan prediksi kesehatanmu dalam 3 detik! ✨</p>
                    <div class="grid grid-cols-3 gap-2 mb-6">
                        <div class="text-center p-2 bg-green-50 rounded-lg">
                            <p class="text-lg font-bold text-green-600">85%</p>
                            <p class="text-xs text-gray-500">Protein</p>
                        </div>
                        <div class="text-center p-2 bg-yellow-50 rounded-lg">
                            <p class="text-lg font-bold text-yellow-600">110%</p>
                            <p class="text-xs text-gray-500">Karbo</p>
                        </div>
                        <div class="text-center p-2 bg-red-50 rounded-lg">
                            <p class="text-lg font-bold text-red-600">65%</p>
                            <p class="text-xs text-gray-500">Serat</p>
                        </div>
                    </div>
                    <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?w=400&h=300&fit=crop"
                        alt="Simulasi Makan"
                        class="w-full rounded-xl shadow-md group-hover:shadow-lg transition-shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section (New) -->
    <section class="py-20 bg-gradient-to-br from-green-100 to-teal-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="px-4 py-2 rounded-full bg-green-100 text-green-600 text-sm font-medium">Keuntungan</span>
                <h2 class="mt-6 text-3xl font-bold">Yang Kamu Dapatkan! ⭐</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div data-aos="fade-right" class="bg-white/50 backdrop-blur-sm p-8 rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&h=400" alt="Benefits"
                        class="w-full mb-8 rounded-xl">
                    <h3 class="text-2xl font-bold mb-4">Mengetahui Pola Konsumsi & Gizi</h3>
                    <p class="text-gray-600">Ketahui informasi tentang pola konsumsi makanan dan kandungan gizi yang kamu konsumsi setiap hari.</p>
                </div>
                <div data-aos="fade-left" class="bg-white/50 backdrop-blur-sm p-8 rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc" alt="Mobile" class="w-full mb-8 rounded-xl">
                    <h3 class="text-2xl font-bold mb-4">Prediksi AKG Harian</h3>
                    <p class="text-gray-600">Prediksi kebutuhan asupan gizimu setiap hari berdasarkan pilihan isi piringmu.</p>
                </div>
            </div>
        </div>
    </section>

<!-- About Section with Timeline -->
<section class="py-20 bg-white/50 backdrop-blur-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <span class="px-4 py-2 rounded-full bg-green-100 text-green-600 text-sm font-medium">Cara Kerja</span>
                <h2 class="mt-6 text-3xl font-bold">Pantau Gizi Harianmu ✨</h2>
                <div class="mt-8 space-y-8">
                    <div class="flex gap-4">
                        <div
                            class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600 font-bold">
                            1</div>
                        <div>
                            <h3 class="font-semibold mb-2">Daftar dan Login</h3>
                            <p class="text-gray-600">Buat akun dengan cepat untuk mulai memantau konsumsi gizi harianmu.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div
                            class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center text-teal-600 font-bold">
                            2</div>
                        <div>
                            <h3 class="font-semibold mb-2">Input Data Makanan</h3>
                            <p class="text-gray-600">Pilih atau tambahkan makanan yang kamu konsumsi hari ini ke dalam sistem.</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <div
                            class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600 font-bold">
                            3</div>
                        <div>
                            <h3 class="font-semibold mb-2">Lihat Pola & Prediksi AKG</h3>
                            <p class="text-gray-600">Sistem akan memberikan analisis pola konsumsi dan prediksi kebutuhan gizimu (AKG).</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-left" class="grid grid-cols-2 gap-4">
                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&h=500" alt="Healthy Food" class="rounded-xl">
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&h=500" alt="Tech" class="rounded-xl">
                <img src="https://images.unsplash.com/photo-1605296867304-46d5465a13f1?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&h=500" alt="Nutrition Analysis" class="rounded-xl">
                <img src="https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&h=500" alt="Daily Diet" class="rounded-xl">
            </div>
        </div>
    </div>
</section>


    <!-- Contact Section -->
    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold">Siap Mulai? 🚀</h2>
            <p class="mt-4 text-xl text-gray-600">Gabung sekarang, gratis!</p>
            <a wire:navigate href="/register"
                class="mt-8 inline-block bg-gradient-to-r from-green-600 to-teal-600 text-white px-8 py-3 rounded-full hover:shadow-lg transition-all">
                Yuk, Mulai! ✨
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="space-y-4">
                    <h3
                        class="text-2xl font-bold bg-gradient-to-r from-green-400 to-teal-400 bg-clip-text text-transparent">
                        NutriWise</h3>
                    <p class="text-gray-400 leading-relaxed">Solusi nutrisi cerdas untuk masa depan yang lebih sehat
                        dengan teknologi AI.</p>
                    <div class="flex gap-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.446 1.394c-.14.18-.357.295-.6.295-.002 0-.003 0-.005 0l.213-3.054 5.56-5.022c.24-.213-.054-.334-.373-.121l-6.869 4.326-2.96-.924c-.64-.203-.654-.64.135-.954l11.566-4.458c.538-.196 1.006.128.832.941z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Menu</h4>
                    <ul class="space-y-2">
                        <li><a href="#features" class="text-gray-400 hover:text-white transition-colors">Fitur</a></li>
                        <li><a href="#benefits" class="text-gray-400 hover:text-white transition-colors">Keuntungan</a>
                        </li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors">Tentang Kami</a>
                        </li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Bantuan</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Kebijakan Privasi</a>
                        </li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Syarat & Ketentuan</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Hubungi Kami</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            info@nutrihealth.com
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +62 123 4567 890
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8">
                <p class="text-center text-gray-400">&copy; 2024 NutriWise AI. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @livewireScriptConfig()
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');

            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        }
    </script>
</body>

</html>
