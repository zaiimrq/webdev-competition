<?php

use App\Models\Food;
use Livewire\Volt\Component;

new class extends Component {
    public ?int $selectedCategory = null;
    public ?int $selectedGender = null;
    public array $selectedIds = [];
    public string $message = '';

    public function selectMenu(string $category, int $id): void
    {
        $this->selectedIds[$category] = $id;
    }

    public function check(){
        $sarapan = Food::find($this->selectedIds['sarapan']);
        $makanSiang = Food::find($this->selectedIds['makan-siang']);
        $camilan = Food::find($this->selectedIds['camilan']);
        $makanMalam = Food::find($this->selectedIds['makan-malam']);
        $totalCalories = $sarapan->calories + $makanSiang->calories + $camilan->calories + $makanMalam->calories;
        $totalProtein = $sarapan->protein + $makanSiang->protein + $camilan->protein + $makanMalam->protein;
        $totalCarbs = $sarapan->carbohydrate + $makanSiang->carbohydrate + $camilan->carbohydrate + $makanMalam->carbohydrate;
        $totalFat = $sarapan->fat + $makanSiang->fat + $camilan->fat + $makanMalam->fat;

        $response = Http::post('https://api.travelkurir.com/predict', [
            'kategori_umur' => $this->selectedCategory,
            'jenis_kelamin' => $this->selectedGender,
            'total_protein' => $totalProtein,
            'total_karbohidrat' => $totalCarbs,
            'total_lemak' => $totalFat,
            'total_kalori' => $totalCalories,
    ]);

    if($response->successful()){
        $data = $response->json();
        $this->message = $data['klasifikasi'];
    } else {
        $this->message = "Terjadi kesalahan saat memeriksa kecukupan gizi.";
    }
}

    public function showGenderSelection() {
        // Return false for balita (0) and anak-anak (1), true for others
        return $this->selectedCategory !== null && !in_array($this->selectedCategory, [0, 1]);
    }

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
                <button x-on:click="$wire.selectedCategory = 0"
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">👶</span> <!-- Bayi lebih mewakili balita -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Balita</h3>
                </button>
                <button x-on:click="$wire.selectedCategory = 1"
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">🧒</span> <!-- Anak laki-laki netral -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Anak-Anak</h3>
                </button>
                <button x-on:click="$wire.selectedCategory = 2"
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">👩‍🎓👨‍🎓</span> <!-- Bisa pakai kombinasi -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Remaja</h3>
                </button>
                <button x-on:click="$wire.selectedCategory = 3"
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">👩‍💼👨‍💼</span> <!-- Profesional dewasa -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Dewasa</h3>
                </button>
                <button x-on:click="$wire.selectedCategory = 4"
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">🧑‍🦳</span> <!-- Rambut mulai memutih -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Paruh Baya</h3>
                </button>
                <button x-on:click="$wire.selectedCategory = 5"
                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center">
                    <span class="text-4xl">👵👴</span> <!-- Kombinasi nenek+kakek -->
                    <h3 class="mt-4 text-lg font-semibold text-gray-800">Lansia</h3>
                </button>
            </div>

            <!-- Konten Simulasi -->
            <div id="simulation-content" x-show="$wire.selectedCategory !== null" class="mt-12">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <h3 class="text-2xl font-bold text-teal-600 mb-4" x-text="$wire.selectedCategory === 0 ? 'Balita' :
                        $wire.selectedCategory === 1 ? 'Anak-Anak' :
                        $wire.selectedCategory === 2 ? 'Remaja' :
                        $wire.selectedCategory === 3 ? 'Dewasa' :
                        $wire.selectedCategory === 4 ? 'Paruh Baya' :
                        $wire.selectedCategory === 5 ? 'Lansia' : 'Pilih Kategori'">
                    </h3>
                    <p class="text-gray-700 leading-relaxed" x-text="$wire.selectedCategory === 0 ? 'Balita memerlukan makanan yang seimbang dengan karbohidrat, protein, lemak, serta sayur dan buah untuk mendukung aktivitas dan pertumbuhan.' :
                        $wire.selectedCategory === 1 ? 'Anak-anak membutuhkan energi dari karbohidrat, protein untuk pertumbuhan, serta vitamin dan mineral untuk daya tahan tubuh.' :
                        $wire.selectedCategory === 2 ? 'Remaja memerlukan asupan gizi yang mendukung pertumbuhan pesat, termasuk protein, kalsium, dan zat besi.' :
                        $wire.selectedCategory === 3 ? 'Orang dewasa memerlukan pola makan seimbang dengan fokus pada protein, serat, dan lemak sehat untuk menjaga kesehatan tubuh.' :
                        $wire.selectedCategory === 4 ? 'Paruh baya membutuhkan makanan rendah lemak jenuh dan tinggi serat untuk menjaga kesehatan jantung dan metabolisme.' :
                        $wire.selectedCategory === 5 ? 'Lansia memerlukan makanan yang mudah dicerna, kaya akan kalsium, vitamin D, dan serat untuk mendukung kesehatan tulang dan pencernaan.' :
                        'Silakan pilih kategori usia untuk melihat informasi kebutuhan gizi yang sesuai.'">
                    </p>

                    <!-- Pilihan Jenis Kelamin -->
                    <div x-cloak
                         x-show="$wire.selectedCategory !== null && !([0,1].includes($wire.selectedCategory))"
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform scale-90"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100 transform scale-100"
                         x-transition:leave-end="opacity-0 transform scale-90"
                         class="mt-6">
                        <h4 class="text-lg font-semibold text-gray-800 mb-4">Pilih Jenis Kelamin</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <button x-on:click="$wire.selectedGender = 0"
                                class="bg-blue-50 p-4 rounded-xl shadow-md hover:shadow-lg transition-all text-center"
                                :class="{ 'ring-2 ring-blue-500': $wire.selectedGender === 0 }">
                                <span class="text-4xl">👨</span>
                                <h5 class="mt-2 text-md font-semibold text-gray-800">Laki-Laki</h5>
                            </button>
                            <button x-on:click="$wire.selectedGender = 1"
                                class="bg-pink-50 p-4 rounded-xl shadow-md hover:shadow-lg transition-all text-center"
                                :class="{ 'ring-2 ring-pink-500': $wire.selectedGender === 1 }">
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
                                <button wire:click="selectMenu('sarapan', {{ $menu->id }})"
                                    class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center"
                                    :class="{ 'ring-2 ring-teal-500': $wire.selectedIds['sarapan'] === {{ $menu->id }} }">
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
                        <button wire:click="selectMenu('makan-siang', {{ $menu->id }})"
                            class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center"
                            :class="{ 'ring-2 ring-teal-500': $wire.selectedIds['makan-siang'] === {{ $menu->id }} }">
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
                        <button wire:click="selectMenu('camilan', {{ $menu->id }})"
                            class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center"
                            :class="{ 'ring-2 ring-teal-500': $wire.selectedIds['camilan'] === {{ $menu->id }} }">
                            <img src="{{ $menu->image_url }}"
                                alt="{{ $menu->name }}" class="w-full h-50 object-cover rounded-md mb-4">
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
                        <button wire:click="selectMenu('makan-malam', {{ $menu->id }})"
                            class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-all text-center"
                            :class="{ 'ring-2 ring-teal-500': $wire.selectedIds['makan-malam'] === {{ $menu->id }} }">
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
                <p class="text-gray-600 mb-4" x-text="$wire.message"></p>
                <button wire:click="check"
                    class="bg-gradient-to-r from-green-600 to-teal-600 text-white px-8 py-3 rounded-full hover:shadow-lg transition-all">
                    Cek Kecukupan Gizi
                </button>
            </div>
        </div>
    </section>
</div>
