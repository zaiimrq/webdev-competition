<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        return [
            'sarapan' => \App\Models\Food::query()->sarapan()->get(),
            'makanSiang' => \App\Models\Food::query()->makanSiang()->get(),
            'camilan' => \App\Models\Food::query()->camilan()->get(),
            'makanMalam' => \App\Models\Food::query()->makanMalam()->get(),
    ];
    }
}; ?>

<div>
    <!-- Simulasi Section -->
    <section class="py-20 bg-gradient-to-br from-green-50 to-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2
                    class="text-3xl font-bold bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                    Simulasi Kebutuhan Gizi</h2>
                <p class="mt-4 text-gray-600">Pilih kategori usia untuk melihat kebutuhan gizi yang sesuai.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <button onclick="selectCategory('balita')"
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">👶</span> <!-- Bayi lebih mewakili balita -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Balita</h3>
                </button>
                <button onclick="selectCategory('anak-anak')"
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">🧒</span> <!-- Anak laki-laki netral -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Anak-Anak</h3>
                </button>
                <button onclick="selectCategory('remaja')"
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">👩‍🎓👨‍🎓</span> <!-- Bisa pakai kombinasi -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Remaja</h3>
                </button>
                <button onclick="selectCategory('dewasa')"
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">👩‍💼👨‍💼</span> <!-- Profesional dewasa -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Dewasa</h3>
                </button>
                <button onclick="selectCategory('paruh-baya')"
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">🧑‍🦳</span> <!-- Rambut mulai memutih -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Paruh Baya</h3>
                </button>
                <button onclick="selectCategory('lansia')"
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">👵👴</span> <!-- Kombinasi nenek+kakek -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Lansia</h3>
                </button>
            </div>

            <!-- Konten Simulasi -->
            <div id="simulation-content" class="mt-12 hidden">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 id="category-title" class="text-2xl font-bold text-teal-600 mb-4">Kategori</h3>
                    <p id="category-description" class="text-gray-700 leading-relaxed">Deskripsi kebutuhan gizi akan
                        muncul di sini setelah Anda memilih kategori.</p>

                    <!-- Pilihan Jenis Kelamin -->
                    <div id="gender-selection" class="mt-6 hidden">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">Pilih Jenis Kelamin</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <button onclick="selectGender('male')"
                                class="bg-blue-50 p-4 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                                <span class="text-4xl">👨</span>
                                <h5 class="mt-2 text-md font-semibold text-gray-800">Laki-Laki</h5>
                            </button>
                            <button onclick="selectGender('female')"
                                class="bg-pink-50 p-4 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                                <span class="text-4xl">👩</span>
                                <h5 class="mt-2 text-md font-semibold text-gray-800">Perempuan</h5>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Simulasi Menu Section -->
    <section class="py-20 bg-gradient-to-br from-green-50 to-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2
                    class="text-3xl font-bold bg-gradient-to-r from-green-600 to-teal-600 bg-clip-text text-transparent">
                    Simulasi Menu Harian - NutriWise</h2>
                <p class="mt-4 text-gray-600">Rancang hari sehatmu selangkah lebih mudah—pilih sajian lezat dan bergizi
                    untuk keempat waktu makan, lalu lihat seberapa jauh kamu sudah mendekati target gizi harian!</p>
            </div>

            <!-- Pilihan Menu -->
            <div id="menu-selection" class="space-y-12">
                <!-- Sarapan -->
                <div>
                    <h3 class="text-3xl font-bold text-teal-600 mb-4 text-center">Sarapan</h3>
                    <p class="text-gray-600 mb-4 text-center">Awali pagi penuh semangat dengan paduan karbohidrat,
                        protein, dan lemak sehat yang pas. <br>
                        Pilih satu dari menu sarapan kami untuk isi ulang energi dan siapkan tubuhmu menaklukkan
                        aktivitas hari ini!</p>
                    <div class="grid md:grid-cols-3 gap-6">

                            @foreach ($sarapan as $menu)
                                <button onclick="selectMenu('sarapan', '{{ $menu->name }}')"
                                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                                    <img src="{{ $menu->image_url }}"
                                        alt="{{ $menu->name }}" class="w-full h-50 object-cover rounded-md mb-4">
                                    <h4 class="text-lg font-semibold text-gray-800">{{ $menu->name }}</h4>
                                </button>
                            @endforeach
                    </div>
                </div>

                <!-- Makan Siang -->
                <div>
                    <h3 class="text-3xl font-bold text-teal-600 mb-4 text-center">Makan Siang</h3>
                    <p class="text-gray-600 mb-4 text-center">Saat waktu istirahat tiba, manjakan lidah dan selera
                        nutrisi: nasi hangat, lauk kaya protein, sayuran segar, dan camilan penyeimbang. <br>
                        Pilih menu makan siang yang bikin kenyang dan tetap ringan di perut.</p>
                    <div class="grid md:grid-cols-3 gap-6">
                        @foreach ($makanSiang as $menu)
                        <button onclick="selectMenu('makan-siang', '{{ $menu->name }}')"
                            class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                            <img src="{{ $menu->image_url }}"
                                alt="{{ $menu->name }}" class="w-full h-50 object-cover rounded-md mb-4">
                            <h4 class="text-lg font-semibold text-gray-800">{{ $menu->name }}</h4>
                        </button>
                        @endforeach
                    </div>
                </div>

                <!-- Camilan -->
                <div>
                    <h3 class="text-3xl font-bold text-teal-600 mb-4 text-center">Camilan</h3>
                    <p class="text-gray-600 mb-4 text-center">Butuh “boost” di sela jadwal padat? Camilan bergizi jadi
                        penyelamat: buah segar, kacang-kacangan, atau kudapan sehat lain untuk jaga fokus dan mood tetap
                        stabil.</p>
                    <div class="grid md:grid-cols-3 gap-6">
                        @foreach($camilan as $menu)
                        <button onclick="selectMenu('camilan', 'Pisang + Roti + Yoghurt + Kacang Rebus')"
                            class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                            <img src="{{ $menu->image_url }}"
                                alt="Pisang" class="w-full h-50 object-cover rounded-md mb-4">
                            <h4 class="text-lg font-semibold text-gray-800">{{ $menu->name }}</h4>
                        </button>
                        @endforeach
                    </div>
                </div>

                <!-- Makan Malam -->
                <div>
                    <h3 class="text-3xl font-bold text-teal-600 mb-4 text-center">Makan Malam</h3>
                    <p class="text-gray-600 mb-4 text-center">Tutup harimu dengan santapan yang menenangkan pencernaan
                        namun tak kalah bergizi. <br>
                        Pilih menu makan malam yang membuatmu tidur nyenyak dan bangun besok dalam kondisi prima.</p>
                    <div class="grid md:grid-cols-3 gap-6">
                        @foreach ($makanMalam as $menu)
                        <button onclick="selectMenu('makan-malam', '{{ $menu->name }}')"
                            class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                            <img src="{{ $menu->image_url }}"
                                alt="{{ $menu->name }}" class="w-full h-50 object-cover rounded-md mb-4">
                            <h4 class="text-lg font-semibold text-gray-800">{{ $menu->name }}</h4>
                        </button>
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- Tombol Cek Kecukupan Gizi -->
            <div class="text-center mt-12">
                <button onclick="checkNutrition()"
                    class="bg-gradient-to-r from-green-600 to-teal-600 text-white px-8 py-3 rounded-full hover:shadow-lg transition-all">
                    Cek Kecukupan Gizi
                </button>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script>
        const selectedMenus = {
            sarapan: null,
            "makan-siang": null,
            camilan: null,
            "makan-malam": null
        };

        function selectCategory(category) {
            const content = document.getElementById('simulation-content');
            const title = document.getElementById('category-title');
            const description = document.getElementById('category-description');
            const genderSelection = document.getElementById('gender-selection');

            const data = {
                balita: {
                    title: 'Balita',
                    description: 'Balita memerlukan makanan yang seimbang dengan karbohidrat, protein, lemak, serta sayur dan buah untuk mendukung aktivitas dan pertumbuhan.'
                },
                'anak-anak': {
                    title: 'Anak-Anak',
                    description: 'Anak-anak membutuhkan energi dari karbohidrat, protein untuk pertumbuhan, serta vitamin dan mineral untuk daya tahan tubuh.'
                },
                remaja: {
                    title: 'Remaja',
                    description: 'Remaja memerlukan asupan gizi yang mendukung pertumbuhan pesat, termasuk protein, kalsium, dan zat besi.'
                },
                dewasa: {
                    title: 'Dewasa',
                    description: 'Orang dewasa memerlukan pola makan seimbang dengan fokus pada protein, serat, dan lemak sehat untuk menjaga kesehatan tubuh.'
                },
                'paruh-baya': {
                    title: 'Paruh Baya',
                    description: 'Paruh baya membutuhkan makanan rendah lemak jenuh dan tinggi serat untuk menjaga kesehatan jantung dan metabolisme.'
                },
                lansia: {
                    title: 'Lansia',
                    description: 'Lansia memerlukan makanan yang mudah dicerna, kaya akan kalsium, vitamin D, dan serat untuk mendukung kesehatan tulang dan pencernaan.'
                }
            };

            if (data[category]) {
                title.textContent = data[category].title;
                description.textContent = data[category].description;
                content.classList.remove('hidden');

                // Show gender selection only for categories that require it
                if (category === 'balita' || category === 'anak-anak') {
                    genderSelection.classList.add('hidden');
                } else {
                    genderSelection.classList.remove('hidden');
                }
            }
        }

        function selectGender(gender) {
            const genderMessage = gender === 'male' ? 'Anda memilih Laki-Laki.' : 'Anda memilih Perempuan.';
            alert(genderMessage);
        }

        function selectMenu(mealType, menu) {
            selectedMenus[mealType] = menu;
            alert(`Anda memilih menu untuk ${mealType.replace('-', ' ')}: ${menu}`);
        }

        function checkNutrition() {
            if (Object.values(selectedMenus).some(menu => menu === null)) {
                alert("Harap pilih menu untuk semua waktu makan sebelum mengecek kecukupan gizi.");
                return;
            }

            let summary = "Menu yang Anda pilih:\n";
            for (const [mealType, menu] of Object.entries(selectedMenus)) {
                summary += `- ${mealType.replace('-', ' ')}: ${menu}\n`;
            }

            alert(summary + "\nFitur cek kecukupan gizi akan segera tersedia.");
        }
    </script>
</div>
