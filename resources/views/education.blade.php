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
                    <a wire:navigate href="/" class="text-gray-700 hover:text-teal-600 transition-colors">Home</a>
                    <div class="h-5 w-px bg-gray-300"></div>
                    <a wire:navigate href="/login" class="text-gray-700 hover:text-teal-600 transition-colors">Masuk</a>
                    <a wire:navigate href="/register" class="bg-gradient-to-r from-green-600 to-teal-600 text-white px-6 py-2 rounded-full hover:shadow-lg transition-all">
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
        </div>
    </section>


    <!-- Subtopik Section -->
    <section id="subtopik" class="py-20 bg-gradient-to-br from-green-50 to-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                    Pilih Subtopik</h2>
                <p class="mt-4 text-gray-600">Klik salah satu subtopik untuk melihat kontennya.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <button onclick="showContent('dasar-dasar-gizi')" class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">🥗</span>
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Pengenalan Gizi</h3>
                </button>
                <button onclick="showContent('peran-gizi')" class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">📊</span>
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Peran Gizi</h3>
                </button>
                <button onclick="showContent('panduan-gizi')" class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">🥦</span>
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Panduan Gizi Seimbang</h3>
                </button>
            </div>
        </div>
    </section>

    <!-- Konten Subtopik -->
    <section id="konten-subtopik" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Dasar-Dasar Gizi -->
            <div id="dasar-dasar-gizi" class="hidden p-8 bg-white rounded-2xl shadow-xl max-w-7xl mx-auto" data-aos="fade-up" data-aos-duration="800">
                <!-- Header dengan ikon dan gradient -->
                <div class="flex flex-col md:flex-row items-center justify-between mb-12 bg-gradient-to-r from-green-50 to-teal-50 p-8 rounded-2xl">
                    <div class="flex items-center">
                        <div class="text-6xl transform hover:scale-110 transition-transform duration-300">🥗</div>
                        <div class="ml-6">
                            <h2 class="text-4xl font-extrabold bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                                Pengenalan Gizi
                            </h2>
                            <p class="text-gray-600 mt-2">Memahami dasar-dasar nutrisi untuk hidup sehat</p>
                        </div>
                    </div>
                    <div class="hidden md:block text-7xl opacity-20">🌱</div>
                </div>

                <!-- Isi Deskripsi -->
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <!-- Pengertian Gizi -->
                    <h4 class="text-xl font-bold text-teal-600 mb-4">Pengertian Gizi</h4>
                    <p class="text-gray-700 leading-relaxed">
                        Gizi menjadi peran penting dalam kesehatan dan kesejahteraan kita secara keseluruhan. Dalam tubuh kita terjadi, proses di mana zat dalam makanan diubah menjadi jaringan tubuh dan menyediakan sumber energi untuk beraktifitas. Oleh karena itu, asupan gizi harus diperhatikan kualitas dan kuantitasnya. Untuk memenuhi aspek kualitas dan kuantitas tersebut pastikan setiap makanan yang dikonsumsi harus beragam komoditasnya, bernilai gizi yang baik bagi kesehatan tubuh, seimbang yaitu sesuai dengan kebutuhan tubuh, dan aman dari cemaran yang berpotensi menggangu kesehatan.
                    </p>
                    <!-- Pengelompokkan Gizi -->
                    <h4 class="text-xl font-bold text-teal-600 my-4">Pengelompokkan Gizi</h4>
                    <p class="text-gray-700 leading-relaxed">
                        Dalam pengelompokannya, gizi terbagi menjadi makronutrien, mikronutrien dan air dengan penjelasan sebagai berikut:
                    </p>
                </div>

                <!-- Grid poin-poin dengan card kecil -->
                <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <li class="flex flex-col items-center bg-green-50 p-4 rounded-lg hover:shadow-md transition-shadow">
                    <span class="text-4xl mb-2">🍽️</span>
                    <h3 class="font-semibold text-lg mb-3">Makronutrien</h3>
                    <p class="text-gray-600 text-md text-center">
                        Makronutrien adalah nutrisi yang dibutuhkan tubuh kita dalam jumlah yang relatif besar, meliputi protein, karbohidrat, dan lemak. Secara fungsi, kelompok makronutrien menyediakan bahan mentah untuk pembangunan dan pemeliharaan jaringan serta bahan bakar untuk menjalankan berbagai aktivitas fisiologis dan metabolisme yang menopang kehidupan.
                    </p>
                    </li>

                    <li class="flex flex-col items-center bg-yellow-50 p-4 rounded-lg hover:shadow-md transition-shadow">
                    <span class="text-4xl mb-2">💊</span>
                    <h3 class="font-semibold text-lg mb-3">Mikronutrien</h3>
                    <p class="text-gray-600 text-md text-center">
                        Di sisi lain, mikronutrien dibutuhkan dalam jumlah yang lebih kecil tetapi tetap penting untuk fungsi tubuh yang baik. Ini termasuk vitamin dan mineral. Mikronutrien, bukanlah sumber energi itu sendiri tetapi memfasilitasi proses metabolisme di seluruh tubuh.
                    </p>
                    </li>

                    <li class="flex flex-col items-center bg-blue-50 p-4 rounded-lg hover:shadow-md transition-shadow">
                    <span class="text-4xl mb-2">💧</span>
                    <h3 class="font-semibold text-lg mb-3">Air</h3>
                    <p class="text-gray-600 text-md text-center">
                        Kategori gizi terakhir adalah air, yang menyediakan media di mana semua proses metabolisme tubuh terjadi.
                    </p>
                    </li>
                </ul>
            </div>

            <!-- Peran Gizi -->
            <div id="peran-gizi" class="hidden p-8 bg-white rounded-2xl shadow-xl max-w-7xl mx-auto" data-aos="fade-up" data-aos-duration="800">
                <div class="flex flex-col md:flex-row items-center justify-between mb-12 bg-gradient-to-r from-yellow-50 to-orange-50 p-8 rounded-2xl">
                    <div class="flex items-center">
                        <div class="text-6xl transform hover:scale-110 transition-transform duration-300">🍎</div>
                        <div class="ml-6">
                            <h2 class="text-4xl font-extrabold bg-gradient-to-r from-yellow-600 to-orange-600 bg-clip-text text-transparent">
                                Peran Gizi
                            </h2>
                            <p class="text-gray-600 mt-2">Memahami peran masing-masing zat gizi untuk tubuh.</p>
                        </div>
                    </div>
                    <div class="hidden md:block text-7xl opacity-20">🌟</div>
                </div>

                <!-- Isi Deskripsi -->
                <div class="bg-white p-6 rounded-xl shadow-sm">
                    <h4 class="text-xl font-bold text-orange-600 mb-4">Protein</h4>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Protein merupakan zat gizi makro yang menyusun berbagai jaringan tubuh, menjalankan metabolisme tubuh, menghasilkan hormon dan enzim, serta menjaga keseimbangan asam dan basa di dalam tubuh. Kebutuhan protein harian berbeda-beda menurut usia, jenis kelamin, dan tingkat aktivitas fisik. Sumber protein dapat ditemukan pada daging, ikan, telur, produk susu, dan kacang-kacangan.
                    </p>

                    <h4 class="text-xl font-bold text-orange-600 mb-4">Karbohidrat</h4>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Karbohidrat berfungsi menyediakan energi bagi tubuh. Idealnya, sekitar 45 – 65% dari total asupan kalori Anda berasal dari karbohidrat. Sumber karbohidrat meliputi nasi, biji-bijian utuh, buah-buahan, sayuran, dan kacang-kacangan.
                    </p>

                    <h4 class="text-xl font-bold text-orange-600 mb-4">Lemak</h4>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        Lemak melindungi organ-organ vital, menjadi insulator yang mempertahankan panas tubuh, serta melarutkan dan membawa vitamin larut lemak. Lemak sehat dapat ditemukan dalam makanan seperti alpukat, kacang-kacangan, biji-bijian, dan ikan.
                    </p>

                    <h4 class="text-xl font-bold text-orange-600 mb-4">Vitamin dan Mineral</h4>
                    <p class="text-gray-700 leading-relaxed">
                        Vitamin dan mineral sangat penting untuk berbagai fungsi tubuh, termasuk dukungan kekebalan tubuh, kesehatan tulang, dan produksi energi. Contoh vitamin meliputi:
                    </p>
                    <ul class="list-disc list-inside text-gray-700 ml-4 space-y-2">
                        <li><strong>Vitamin A:</strong> Menjaga kesehatan mata, tulang, dan kulit.</li>
                        <li><strong>Vitamin B kompleks:</strong> Membantu pembentukan energi dan mendukung pertumbuhan.</li>
                        <li><strong>Vitamin C:</strong> Antioksidan yang menjaga kesehatan jaringan.</li>
                        <li><strong>Vitamin D:</strong> Memelihara kesehatan tulang dan gigi.</li>
                        <li><strong>Vitamin E:</strong> Membantu pembentukan sel darah merah.</li>
                        <li><strong>Vitamin K:</strong> Membantu proses pembekuan darah.</li>
                    </ul>
                </div>
            </div>
            <!-- Panduan Gizi Seimbang -->
            <div id="panduan-gizi" class="hidden p-8 bg-white rounded-2xl shadow-xl max-w-7xl mx-auto" data-aos="fade-up" data-aos-duration="800">
                <div class="flex flex-col md:flex-row items-center justify-between mb-12 bg-gradient-to-r from-purple-50 to-pink-50 p-8 rounded-2xl">
                    <div class="flex items-center">
                        <div class="text-6xl transform hover:scale-110 transition-transform duration-300">🍽️</div>
                        <div class="ml-6">
                            <h2 class="text-4xl font-extrabold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                                Panduan Gizi Seimbang
                            </h2>
                            <p class="text-gray-600 mt-2">Memahami pentingnya gizi seimbang untuk kesehatan tubuh.</p>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061" alt="Healthy Food" class="w-48 h-48 rounded-full object-cover shadow-lg"/>
                    </div>
                </div>

                <!-- Isi Deskripsi -->
                <div class="bg-gradient-to-r from-purple-50 to-pink-50 p-6 rounded-xl shadow-sm">
                    <div class="flex flex-col md:flex-row gap-8">
                        <div class="md:w-1/2">
                            <p class="text-gray-700 leading-relaxed mb-6">
                                Gizi seimbang adalah kombinasi menu makanan sehari-hari yang mengandung seluruh zat gizi yang dibutuhkan oleh tubuh. Pada dasarnya, tak ada satu pun bahan makanan yang mengandung semua zat gizi yang dibutuhkan oleh tubuh.
                            </p>
                        </div>
                        <div class="md:w-1/2">
                            <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352" alt="Balanced Nutrition" class="w-full h-64 object-cover rounded-xl shadow-md mb-6"/>
                        </div>
                    </div>

                    <div class="mt-8 bg-white p-6 rounded-xl shadow-md">
                        <h4 class="text-xl font-bold text-purple-600 mb-4">Sepuluh Pedoman Gizi Seimbang</h4>
                            <ul class="space-y-3">
                                <li class="flex items-center bg-purple-100/50 hover:bg-purple-200/50 p-3 rounded-lg shadow-sm transition-colors">
                                    <span class="text-purple-500 mr-2">✦</span>
                                    Nikmati dan syukuri beragam makanan
                                </li>
                                <li class="flex items-center bg-purple-100/50 hover:bg-purple-200/50 p-3 rounded-lg shadow-sm transition-colors">
                                    <span class="text-pink-500 mr-2">✦</span>
                                    Biasakan makan aneka ragam makanan pokok
                                </li>
                                <li class="flex items-center bg-purple-100/50 hover:bg-purple-200/50 p-3 rounded-lg shadow-sm transition-colors">
                                    <span class="text-purple-500 mr-2">✦</span>
                                    Biasakan makan lauk pauk yang kaya protein
                                </li>
                                <!-- ... other list items with alternating colors ... -->
                            </ul>
                        <h4 class="text-xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent my-4">
                            Isi Piringku
                        </h4>
                        <div class="flex flex-col md:flex-row gap-6 items-center">
                            <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c" alt="Healthy Plate" class="w-full md:w-1/3 h-64 object-cover rounded-xl shadow-lg"/>
                            <div class="md:w-2/3">
                                <p class="text-gray-700 leading-relaxed mb-4">
                                    Dalam Isi Piringku setiap kali makan, 50 persen piring diisi dengan sayur dan buah, sedangkan 50 persen lainnya diisi dengan makanan pokok dan lauk pauk.
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div class="bg-purple-50 p-4 rounded-lg">
                                        <h5 class="text-lg font-semibold text-purple-600 mb-2">Makanan Pokok</h5>
                                        <p class="text-gray-700">Sumber karbohidrat dan tenaga utama, seperti beras, jagung, sagu dan umbi-umbian.</p>
                                    </div>
                                    <div class="bg-pink-50 p-4 rounded-lg">
                                        <h5 class="text-lg font-semibold text-pink-600 mb-2">Lauk Pauk</h5>
                                        <p class="text-gray-700">Sumber protein hewani dan nabati untuk memenuhi kebutuhan nutrisi tubuh.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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

        function showContent(id) {
            // Hide all subtopic contents
            document.querySelectorAll('#konten-subtopik > div > div').forEach(div => div.classList.add('hidden'));
            
            // Show the selected content
            document.getElementById(id).classList.remove('hidden');
            
            // Scroll to content
            document.getElementById('konten-subtopik').scrollIntoView({ behavior: 'smooth' });
        }


        // Show first content by default
        document.addEventListener('DOMContentLoaded', function() {
            showContent('dasar-dasar-gizi');
        });
    </script>
</x-layouts.guest>
