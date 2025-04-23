<x-layouts.guest>
    <!-- Navbar -->
    <nav class="fixed w-full z-50">
        <div class="absolute inset-0 bg-white/80 backdrop-blur-xl"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a wire:navigate href="/"
                        class="text-2xl font-bold bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                        NutriWise
                    </a>
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-6">
                    <a href="#pengenalan" class="text-gray-700 hover:text-teal-600 transition-colors">Pengenalan</a>
                    <a href="#makronutrien" class="text-gray-700 hover:text-teal-600 transition-colors">Makronutrien</a>
                    <a href="#mikronutrien" class="text-gray-700 hover:text-teal-600 transition-colors">Mikronutrien</a>
                    <a href="#pola-makan" class="text-gray-700 hover:text-teal-600 transition-colors">Pola Makan</a>
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
                    <a href="#pengenalan"
                        class="block text-gray-700 hover:text-green-600 transition-colors py-2">Pengenalan</a>
                    <a href="#makronutrien"
                        class="block text-gray-700 hover:text-green-600 transition-colors py-2">Makronutrien</a>
                    <a href="#mikronutrien"
                        class="block text-gray-700 hover:text-green-600 transition-colors py-2">Mikronutrien</a>
                    <a href="#pola-makan" class="block text-gray-700 hover:text-green-600 transition-colors py-2">Pola
                        Makan</a>
                    <div class="h-px bg-gray-200 my-2"></div>
                    <a wire:navigate href="/login"
                        class="block text-gray-700 hover:text-green-600 transition-colors py-2">Masuk</a>
                    <a wire:navigate href="/register"
                        class="block bg-gradient-to-r from-green-600 to-teal-600 text-white px-6 py-2 rounded-full text-center">
                        Daftar
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <section id="pengenalan" class="min-h-[60vh] flex items-center pt-24 bg-gradient-to-br from-green-50 to-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center" data-aos="fade-up">
                <span class="px-4 py-2 rounded-full bg-green-100 text-green-600 text-sm font-medium">Materi
                    Edukasi</span>
                <h1 class="mt-6 text-3xl md:text-4xl font-bold text-gray-800">
                    Mengenal Lebih Dalam Tentang <span
                        class="bg-gradient-to-r from-green-500 to-teal-500 bg-clip-text text-transparent">Nutrisi &
                        Gizi</span>
                </h1>
                <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                    Temukan berbagai informasi penting tentang nutrisi dan pola makan sehat untuk menunjang kesehatan
                    optimal Anda.
                </p>
            </div>
            <div class="mt-12 grid md:grid-cols-3 gap-8 text-center">
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl">🍎</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Nutrisi Seimbang</h3>
                    <p class="text-gray-600">Pelajari cara menyeimbangkan asupan nutrisi harian Anda</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl">🥗</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Pola Makan Sehat</h3>
                    <p class="text-gray-600">Ketahui prinsip-prinsip pola makan yang sehat</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-3xl">💪</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Gaya Hidup Sehat</h3>
                    <p class="text-gray-600">Tips menerapkan gaya hidup sehat sehari-hari</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Makronutrien Section -->
    <section id="makronutrien" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2
                    class="text-3xl font-bold bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                    Mengenal Makronutrien</h2>
                <p class="mt-4 text-gray-600">Zat gizi makro yang dibutuhkan tubuh dalam jumlah besar</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all" data-aos="fade-up">
                    <div class="w-16 h-16 bg-red-100 rounded-xl flex items-center justify-center mb-6">
                        <span class="text-3xl">🥩</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Protein</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 mt-1">✓</span>
                            <span>Zat pembangun utama untuk sel-sel tubuh</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 mt-1">✓</span>
                            <span>Penting untuk pertumbuhan dan perbaikan jaringan</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 mt-1">✓</span>
                            <span>Sumber: daging, ikan, telur, kacang-kacangan</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 mt-1">✓</span>
                            <span>Kebutuhan: 10-35% dari total kalori harian</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all" data-aos="fade-up"
                    data-aos-delay="100">
                    <div class="w-16 h-16 bg-yellow-100 rounded-xl flex items-center justify-center mb-6">
                        <span class="text-3xl">🌾</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Karbohidrat</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 mt-1">✓</span>
                            <span>Sumber energi utama tubuh</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 mt-1">✓</span>
                            <span>Penting untuk fungsi otak dan sistem saraf</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 mt-1">✓</span>
                            <span>Sumber: nasi, roti, pasta, umbi-umbian</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 mt-1">✓</span>
                            <span>Kebutuhan: 45-65% dari total kalori harian</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all" data-aos="fade-up"
                    data-aos-delay="200">
                    <div class="w-16 h-16 bg-green-100 rounded-xl flex items-center justify-center mb-6">
                        <span class="text-3xl">🥑</span>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Lemak</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 mt-1">✓</span>
                            <span>Penting untuk penyerapan vitamin</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 mt-1">✓</span>
                            <span>Melindungi organ vital tubuh</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 mt-1">✓</span>
                            <span>Sumber: minyak zaitun, alpukat, kacang-kacangan</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-green-500 mt-1">✓</span>
                            <span>Kebutuhan: 20-35% dari total kalori harian</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Mikronutrien Section -->
    <section id="mikronutrien" class="py-20 bg-gradient-to-br from-green-50 to-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2
                    class="text-3xl font-bold bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                    Mikronutrien Penting</h2>
                <p class="mt-4 text-gray-600">Zat gizi mikro yang dibutuhkan tubuh dalam jumlah kecil namun vital</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all" data-aos="fade-right">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-orange-100 rounded-xl flex items-center justify-center">
                            <span class="text-3xl">🍊</span>
                        </div>
                        <h3 class="text-2xl font-semibold">Vitamin</h3>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-semibold mb-2">Vitamin Larut dalam Air</h4>
                            <p class="text-gray-600 mb-2">Vitamin B kompleks dan Vitamin C</p>
                            <ul class="list-disc list-inside text-gray-600 ml-4 space-y-1">
                                <li>Penting untuk metabolisme energi</li>
                                <li>Mendukung sistem imun</li>
                                <li>Sumber: buah jeruk, sayuran hijau, daging</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-2">Vitamin Larut dalam Lemak</h4>
                            <p class="text-gray-600 mb-2">Vitamin A, D, E, dan K</p>
                            <ul class="list-disc list-inside text-gray-600 ml-4 space-y-1">
                                <li>Penting untuk kesehatan mata dan tulang</li>
                                <li>Berperan dalam pembekuan darah</li>
                                <li>Sumber: minyak ikan, telur, sayuran hijau</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-all" data-aos="fade-left">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-16 h-16 bg-blue-100 rounded-xl flex items-center justify-center">
                            <span class="text-3xl">🦴</span>
                        </div>
                        <h3 class="text-2xl font-semibold">Mineral</h3>
                    </div>
                    <div class="space-y-6">
                        <div>
                            <h4 class="font-semibold mb-2">Mineral Makro</h4>
                            <p class="text-gray-600 mb-2">Kalsium, Magnesium, Kalium</p>
                            <ul class="list-disc list-inside text-gray-600 ml-4 space-y-1">
                                <li>Penting untuk kesehatan tulang dan gigi</li>
                                <li>Mengatur keseimbangan cairan tubuh</li>
                                <li>Sumber: susu, sayuran hijau, kacang-kacangan</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="font-semibold mb-2">Mineral Mikro</h4>
                            <p class="text-gray-600 mb-2">Zat Besi, Zinc, Selenium</p>
                            <ul class="list-disc list-inside text-gray-600 ml-4 space-y-1">
                                <li>Penting untuk pembentukan sel darah merah</li>
                                <li>Mendukung sistem imun</li>
                                <li>Sumber: daging merah, kerang, biji-bijian</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pola Makan Section -->
    <section id="pola-makan" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2
                    class="text-3xl font-bold bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                    Panduan Pola Makan Sehat</h2>
                <p class="mt-4 text-gray-600">Rekomendasi pola makan untuk kesehatan optimal</p>
            </div>
            <div class="grid md:grid-cols-2 gap-12">
                <div data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd" alt="Healthy Meal"
                        class="w-full rounded-2xl shadow-lg mb-8">
                    <div class="bg-white p-8 rounded-2xl shadow-sm">
                        <h3 class="text-xl font-semibold mb-4">Prinsip Piring Sehat</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-1">
                                    <span class="text-green-600 text-sm">1</span>
                                </div>
                                <div>
                                    <h4 class="font-medium">50% Sayuran dan Buah</h4>
                                    <p class="text-gray-600">Sumber vitamin, mineral, dan serat</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-1">
                                    <span class="text-green-600 text-sm">2</span>
                                </div>
                                <div>
                                    <h4 class="font-medium">25% Protein</h4>
                                    <p class="text-gray-600">Daging tanpa lemak, ikan, telur, atau protein nabati</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 mt-1">
                                    <span class="text-green-600 text-sm">3</span>
                                </div>
                                <div>
                                    <h4 class="font-medium">25% Karbohidrat Kompleks</h4>
                                    <p class="text-gray-600">Nasi merah, roti gandum, atau umbi-umbian</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <div class="bg-white p-8 rounded-2xl shadow-sm mb-8">
                        <h3 class="text-xl font-semibold mb-6">Tips Pola Makan Sehat</h3>
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">⏰</span>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Jadwal Makan Teratur</h4>
                                    <p class="text-gray-600">Makan 3 kali sehari dengan 2-3 camilan sehat</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">💧</span>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Hidrasi Cukup</h4>
                                    <p class="text-gray-600">Minum air putih 8 gelas (2 liter) sehari</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">🥗</span>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Variasi Menu</h4>
                                    <p class="text-gray-600">Konsumsi beragam jenis makanan untuk nutrisi lengkap</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <span class="text-2xl">⚖️</span>
                                </div>
                                <div>
                                    <h4 class="font-medium mb-1">Porsi Seimbang</h4>
                                    <p class="text-gray-600">Perhatikan ukuran porsi sesuai kebutuhan kalori</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-green-500 to-teal-500 p-8 rounded-2xl text-white">
                        <h3 class="text-xl font-semibold mb-4">Hindari:</h3>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3">
                                <span>❌</span>
                                <span>Makanan tinggi gula dan lemak jenuh</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span>❌</span>
                                <span>Minuman bersoda dan beralkohol</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span>❌</span>
                                <span>Makanan olahan dan cepat saji</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <span>❌</span>
                                <span>Konsumsi garam berlebihan</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-br from-green-50 to-teal-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div data-aos="fade-up">
                <h2 class="text-3xl font-bold mb-4">Mulai Perjalanan Sehat Anda! 🌱</h2>
                <p class="text-gray-600 mb-8">Terapkan pengetahuan gizi ini dan pantau asupan nutrisi Anda bersama
                    NutriWise</p>
                <a wire:navigate href="/register"
                    class="inline-block bg-gradient-to-r from-green-600 to-teal-600 text-white px-8 py-3 rounded-full hover:shadow-lg transition-all">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');

            menu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        }
    </script>
</x-layouts.guest>
