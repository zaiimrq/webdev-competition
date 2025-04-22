<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutrition & Health Prediction</title>
    @vite(['resources/css/app.css', 'resources/js/custom.js'])
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/feather-icons/dist/feather.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-purple-50 to-blue-50">
    <!-- Navbar -->
    <nav class="fixed w-full z-50">
        <div class="absolute inset-0 bg-white/80 backdrop-blur-xl"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <h1
                        class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">
                        NutriHealth</h1>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="#features" class="text-gray-700 hover:text-purple-600 transition-colors">Fitur</a>
                    <a href="#benefits" class="text-gray-700 hover:text-purple-600 transition-colors">Keuntungan</a>
                    <a href="#about" class="text-gray-700 hover:text-purple-600 transition-colors">Tentang</a>
                    <div class="h-5 w-px bg-gray-300"></div>
                    <a href="/login" class="text-gray-700 hover:text-purple-600 transition-colors">Masuk</a>
                    <a href="/register"
                        class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-2 rounded-full hover:shadow-lg transition-all">
                        Daftar
                    </a>
                </div>
                <!-- Mobile menu button -->
                <div class="flex items-center md:hidden">
                    <button type="button" onclick="toggleMobileMenu()" class="text-gray-700 hover:text-purple-600">
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
                        class="block text-gray-700 hover:text-purple-600 transition-colors py-2">Fitur</a>
                    <a href="#benefits"
                        class="block text-gray-700 hover:text-purple-600 transition-colors py-2">Keuntungan</a>
                    <a href="#about"
                        class="block text-gray-700 hover:text-purple-600 transition-colors py-2">Tentang</a>
                    <div class="h-px bg-gray-200 my-2"></div>
                    <a href="/login" class="block text-gray-700 hover:text-purple-600 transition-colors py-2">Masuk</a>
                    <a href="/register"
                        class="block bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-2 rounded-full text-center">
                        Daftar
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen flex items-center pt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <span class="px-4 py-2 rounded-full bg-purple-100 text-purple-600 text-sm font-medium">🌟 Masa Depan
                        Nutrisi</span>
                    <h1 class="mt-6 text-4xl md:text-6xl font-bold leading-tight">
                        Makan Enak, <br>
                        <span class="bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent">Hidup
                            Sehat!</span>
                    </h1>
                    <p class="mt-4 text-xl text-gray-600">
                        Yuk, mulai perjalanan sehatmu dengan cara yang menyenangkan! 🚀
                    </p>
                    <div class="mt-8 flex gap-4">
                        <a href="/register"
                            class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-3 rounded-full hover:shadow-lg transition-all">
                            Mulai Gratis ✨
                        </a>
                        <a href="#features" class="group flex items-center gap-2 text-gray-600 hover:text-purple-600">
                            Lihat Fitur
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
                        class="absolute inset-0 bg-gradient-to-r from-purple-200 to-blue-200 rounded-full filter blur-3xl opacity-30">
                    </div>
                    <img src="https://picsum.photos/seed/hero/600/400" alt="Hero"
                        class="relative z-10 rounded-2xl shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="px-4 py-2 rounded-full bg-blue-100 text-blue-600 text-sm font-medium">Kenapa Harus
                    Pakai?</span>
                <h2 class="mt-6 text-3xl font-bold">Semua yang Kamu Butuhkan! 🎯</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div data-aos="zoom-in"
                    class="bg-white/50 backdrop-blur-sm p-8 rounded-2xl hover:shadow-xl transition-all">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-purple-100 to-purple-200 rounded-xl flex items-center justify-center mb-6">
                        🍎
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Catat Makanan</h3>
                    <p class="text-gray-600">Tinggal klik, langsung tercatat! Gak perlu ribet-ribet.</p>
                    <img src="https://picsum.photos/seed/feature1/400/300" alt="Food Tracking"
                        class="w-full mt-6 rounded-xl">
                </div>
                <div data-aos="zoom-in" data-aos-delay="150"
                    class="bg-white/50 backdrop-blur-sm p-8 rounded-2xl hover:shadow-xl transition-all">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl flex items-center justify-center mb-6">
                        📊
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Analisis Pintar</h3>
                    <p class="text-gray-600">Lihat pola makanmu dalam bentuk grafik yang keren!</p>
                    <img src="https://picsum.photos/seed/feature2/400/300" alt="Analysis"
                        class="w-full mt-6 rounded-xl">
                </div>
                <div data-aos="zoom-in" data-aos-delay="300"
                    class="bg-white/50 backdrop-blur-sm p-8 rounded-2xl hover:shadow-xl transition-all">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-green-100 to-green-200 rounded-xl flex items-center justify-center mb-6">
                        🤖
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Prediksi AI</h3>
                    <p class="text-gray-600">Machine Learning canggih buat prediksi kesehatanmu!</p>
                    <img src="https://picsum.photos/seed/feature3/400/300" alt="AI" class="w-full mt-6 rounded-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section (New) -->
    <section class="py-20 bg-gradient-to-br from-purple-100 to-blue-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="px-4 py-2 rounded-full bg-purple-100 text-purple-600 text-sm font-medium">Keuntungan</span>
                <h2 class="mt-6 text-3xl font-bold">Yang Kamu Dapatkan! ⭐</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div data-aos="fade-right" class="bg-white/50 backdrop-blur-sm p-8 rounded-2xl">
                    <img src="https://picsum.photos/seed/benefit1/600/400" alt="Benefits"
                        class="w-full mb-8 rounded-xl">
                    <h3 class="text-2xl font-bold mb-4">Diet Sesuai Kebutuhan</h3>
                    <p class="text-gray-600">Dapatkan rekomendasi diet yang disesuaikan dengan kondisi dan tujuanmu!</p>
                </div>
                <div data-aos="fade-left" class="bg-white/50 backdrop-blur-sm p-8 rounded-2xl">
                    <img src="https://picsum.photos/seed/benefit2/600/400" alt="Mobile" class="w-full mb-8 rounded-xl">
                    <h3 class="text-2xl font-bold mb-4">Akses Dimana Saja</h3>
                    <p class="text-gray-600">Buka di HP atau laptop, tetap bisa pantau nutrisimu kapan aja!</p>
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
                    <h2 class="mt-6 text-3xl font-bold">Gampang Banget! 👌</h2>
                    <div class="mt-8 space-y-8">
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center text-purple-600 font-bold">
                                1</div>
                            <div>
                                <h3 class="font-semibold mb-2">Daftar Gratis</h3>
                                <p class="text-gray-600">Isi data simple, langsung jadi member!</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-bold">
                                2</div>
                            <div>
                                <h3 class="font-semibold mb-2">Catat Makanan</h3>
                                <p class="text-gray-600">Tinggal pilih dari database makanan lengkap</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center text-green-600 font-bold">
                                3</div>
                            <div>
                                <h3 class="font-semibold mb-2">Dapat Insight</h3>
                                <p class="text-gray-600">AI langsung kasih rekomendasi yang cocok!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left" class="grid grid-cols-2 gap-4">
                    <img src="https://picsum.photos/seed/step1/300/300" alt="Step 1" class="rounded-xl">
                    <img src="https://picsum.photos/seed/step2/300/300" alt="Step 2" class="rounded-xl">
                    <img src="https://picsum.photos/seed/step3/300/300" alt="Step 3" class="rounded-xl">
                    <img src="https://picsum.photos/seed/step4/300/300" alt="Step 4" class="rounded-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold">Siap Mulai? 🚀</h2>
            <p class="mt-4 text-xl text-gray-600">Gabung sekarang, gratis!</p>
            <a href="/register"
                class="mt-8 inline-block bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-3 rounded-full hover:shadow-lg transition-all">
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
                        class="text-2xl font-bold bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent">
                        NutriHealth</h3>
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
                <p class="text-center text-gray-400">&copy; 2024 NutriHealth AI. All rights reserved.</p>
            </div>
        </div>
    </footer>

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
