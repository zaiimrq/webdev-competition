<x-layouts.guest>
    <!-- Navbar -->
    <nav class="fixed w-full z-50">
        <div class="absolute inset-0 bg-white/80 backdrop-blur-xl"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <x-app-logo />
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="#features" class="text-gray-700 hover:text-teal-600 transition-colors">Fitur</a>
                    <a href="#benefits" class="text-gray-700 hover:text-teal-600 transition-colors">Keuntungan</a>
                    <div class="h-5 w-px bg-gray-300"></div>
                    @guest
                        <a wire:navigate href="/login" class="text-gray-700 hover:text-teal-600 transition-colors">Masuk</a>
                        <a wire:navigate href="/register"
                            class="bg-gradient-to-r from-green-600 to-teal-600 text-white px-6 py-2 rounded-full hover:shadow-lg transition-all">
                            Daftar
                        </a>
                    @endguest
                    @auth
                        <a wire:navigate href="{{ route('dashboard') }}" class="flex items-center justify-center w-8 h-8 rounded-full bg-gradient-to-r from-green-600 to-teal-600 text-white hover:shadow-lg transition-all">
                            <span class="font-medium">{{ auth()->user()->initials() }}</span>
                        </a>
                    @endauth
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
                    <a href="#about" class="block text-gray-700 hover:text-green-600 transition-colors py-2">Tentang</a>
                    <a wire:navigate href="/team"
                        class="block text-gray-700 hover:text-green-600 transition-colors py-2">Tim</a>
                    <div class="h-px bg-gray-200 my-2"></div>
                    @guest
                        <a wire:navigate href="/login"
                            class="block text-gray-700 hover:text-green-600 transition-colors py-2">Masuk</a>
                        <a wire:navigate href="/register"
                            class="block bg-gradient-to-r from-green-600 to-teal-600 text-white px-6 py-2 rounded-full text-center">
                            Daftar
                        </a>
                    @endguest
                    @auth

                        <a wire:navigate href="{{ route('dashboard') }}"
                            class="block bg-gradient-to-r from-green-600 to-teal-600 text-white px-6 py-2 rounded-full text-center">
                            Dashboard
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center pt-16 bg-gradient-to-br from-green-50 to-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <span class="px-4 py-2 rounded-full bg-green-100 text-green-600 text-sm font-medium">💡 Nutrisi
                        Cerdas</span>
                    <h1 class="mt-6 text-2xl md:text-4xl font-bold leading-tight text-gray-800">
                        Platform Cerdas untuk Edukasi Gizi dan Nutrisi Harian
                        <span class="bg-gradient-to-r from-green-500 to-teal-500 bg-clip-text text-transparent">berbasis
                            AI!</span>
                    </h1>
                    <p class="mt-4 text-lg text-gray-600">
                    Belajar gizi jadi lebih seru! NutriWise bantu cek asupan harianmu pakai teknologi Machine Learning. 🤖🍎
                    </p>
                    <div class="mt-8 flex gap-4">
                        <a wire:navigate href="/register"
                            class="bg-gradient-to-r from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600 text-white px-8 py-3 rounded-full hover:shadow-lg transition-all shadow-md transform hover:scale-105 duration-300">
                            Mulai Sekarang 🍏
                        </a>
                        <a href="#features"
                            class="group flex items-center gap-2 text-gray-600 hover:text-green-600 font-medium">
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
                    <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&w=800&q=80" alt="Healthy food"
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
                <a wire:navigate href="{{ route('education') }}">
                    <div data-aos="zoom-in"
                        class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl hover:shadow-lg transition-all border border-gray-100 hover:border-indigo-200 group">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-indigo-100 to-green-100 rounded-xl flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform">
                            <span class="text-2xl">📚</span>
                        </div>
                        <h3
                            class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-teal-600 transition-colors">
                            Materi Edukasi</h3>
                        <p class="text-gray-600 mb-6">Pelajari berbagai Pengetahuan tentang Pola konsumsi dan Gizi
                            dengan
                            Lengkap di sini. Dari Zero to Hero dalam Pemahaman Gizi! 🚀</p>
                        <div class="flex flex-wrap gap-2 mb-6">
                        </div>
                        <img src="https://images.unsplash.com/photo-1543353071-873f17a7a088?auto=format&fit=crop&w=800&q=80" alt="Materi Edukasi"
                            class="w-full rounded-xl shadow-md group-hover:shadow-lg transition-shadow">
                    </div>
                </a>

                <!-- Card 2: Quiz Gizi -->
                <a wire:navigate href="{{ route('quizzes') }}">

                    <div data-aos="zoom-in" data-aos-delay="150"
                        class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl hover:shadow-lg transition-all border border-gray-100 hover:border-teal-200 group">
                        <div
                            class="w-14 h-14 bg-gradient-to-br from-teal-100 to-cyan-100 rounded-xl flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform">
                            <span class="text-2xl">✏️</span>
                        </div>
                        <h3
                            class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-teal-600 transition-colors">
                            Quiz Gizi</h3>
                        <p class="text-gray-600 mb-6">Belajar gizi jadi seru! 🧠 Selesaikan Quiz Gizi dan Raih posisi
                            teratas di Leaderboard! 🏆</p>
                        <div class="mb-6">
                            <div class="flex items-center mb-2">
                                <div class="w-full bg-gray-200 rounded-full h-2.5">
                                    <div class="bg-teal-600 h-2.5 rounded-full" style="width: 75%"></div>
                                </div>
                                <span class="ml-2 text-sm text-gray-500">75% lengkap</span>
                            </div>
                            <p class="text-xs text-gray-500">3/4 pertanyaan terjawab</p>
                        </div>
                        <img src="https://images.unsplash.com/photo-1588072432836-e10032774350?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cXVpenxlbnwwfHwwfHx8MA%3D%3D?auto=format&fit=crop&w=800&q=80" alt="Quiz Gizi"
                            class="w-full rounded-xl shadow-md group-hover:shadow-lg transition-shadow">
                    </div>
                </a>

                <!-- Card 3: Simulasi & Prediksi -->
                <a wire:navigate href="{{ route('simulation') }}">
                <div data-aos="zoom-in" data-aos-delay="300"
                    class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl hover:shadow-lg transition-all border border-gray-100 hover:border-green-200 group">
                    <div
                        class="w-14 h-14 bg-gradient-to-br from-green-100 to-teal-100 rounded-xl flex items-center justify-center mb-6 shadow-sm group-hover:scale-110 transition-transform">
                        <span class="text-2xl">🤖</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4 text-gray-800 group-hover:text-green-600 transition-colors">
                        Simulasi & Prediksi</h3>
                    <p class="text-gray-600 mb-6">Desain piring makan idealmu secara digital! 🍽️ Langsung lihat
                        analisis gizi dan prediksi kesehatanmu dalam 3 detik! ✨</p>
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
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=800&q=80" alt="Simulasi Makan"
                        class="w-full rounded-xl shadow-md group-hover:shadow-lg transition-shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section (New) -->
    <section id="benefits" class="py-20 bg-gradient-to-br from-green-100 to-teal-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="px-4 py-2 rounded-full bg-green-100 text-green-600 text-sm font-medium">Keuntungan</span>
                <h2 class="mt-6 text-3xl font-bold">Yang Kamu Dapatkan! ⭐</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div data-aos="fade-right" class="bg-white/50 backdrop-blur-sm p-8 rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1670698783848-5cf695a1b308?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aGVhbHR5JTIwZm9vZCUyMHBvcnRpb258ZW58MHx8MHx8fDA%3D?auto=format&fit=crop&w=800&q=80" alt="Benefits"
                        class="w-full mb-8 rounded-xl">
                    <h3 class="text-2xl font-bold mb-4">Mengetahui Pola Konsumsi & Gizi</h3>
                    <p class="text-gray-600">Ketahui informasi tentang pola konsumsi makanan dan kandungan gizi yang
                        kamu konsumsi setiap hari.</p>
                </div>
                <div data-aos="fade-left" class="bg-white/50 backdrop-blur-sm p-8 rounded-2xl">
                    <img src="https://images.unsplash.com/photo-1632689199201-bf222b1ee40f?q=80&w=1480&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D?auto=format&fit=crop&w=800&q=80" alt="Mobile" class="w-full mb-8 rounded-xl">
                    <h3 class="text-2xl font-bold mb-4">Prediksi AKG Harian</h3>
                    <p class="text-gray-600">Prediksi kebutuhan asupan gizimu setiap hari berdasarkan pilihan isi
                        piringmu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section with Timeline -->
    <section class="py-20 bg-white/50 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <span class="px-4 py-2 rounded-full bg-green-100 text-green-600 text-sm font-medium">Cara
                        Kerja</span>
                    <h2 class="mt-6 text-3xl font-bold">NutriWise ✨</h2>
                    <div class="mt-8 space-y-8">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold">
                            1
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Baca Materi Edukasi</h3>
                            <p class="text-gray-600">Baca materi edukasi untuk memahami pentingnya asupan gizi yang seimbang.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600 font-bold">
                            2
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Daftar dan Login</h3>
                            <p class="text-gray-600">Buat akun dengan cepat untuk menguji pengetahuanmu melalui quiz.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center text-teal-600 font-bold">
                            3
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Lakukan Simulasi</h3>
                            <p class="text-gray-600">Tambahkan umur dan makanan yang kamu konsumsi untuk analisis kebutuhan gizimu.</p>
                            </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600 font-bold">
                            4
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Lihat Hasil Prediksi AKG</h3>
                            <p class="text-gray-600">Sistem akan memberikan analisis sesuai kebutuhan gizimu berdasarkan data yang telah kamu masukkan.</p>
                        </div>
                    </div>

                    </div>
                </div>
                <div data-aos="fade-left" class="grid grid-cols-2 gap-4">
                    <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&w=800&q=80" alt="Healthy Food" class="rounded-xl">
                    <img src="https://images.unsplash.com/photo-1543353071-873f17a7a088?auto=format&fit=crop&w=800&q=80" alt="Tech" class="rounded-xl">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8d29ya291dHxlbnwwfHwwfHx8MA%3D%3D?auto=format&fit=crop&w=800&q=80" alt="Nutrition Analysis" class="rounded-xl">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=800&q=80" alt="Daily Diet" class="rounded-xl">
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
</x-layouts.guest>
