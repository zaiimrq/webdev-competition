<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelas Kosmik</title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Acme&display=swap');

        body {
            font-family: 'Acme', sans-serif;
            background: linear-gradient(to bottom, #000000, #38073b);
            min-height: 100vh;
        }

        .teks-konten,
        .gambar-konten {
            display: none;
        }

        .teks-konten.active,
        .gambar-konten.active {
            display: block;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/custom.js'])
</head>

<body class="text-gray-800">
    <div class="min-h-screen p-8 md:p-16">
        <div class="max-w-6xl mx-auto bg-amber-50 rounded-3xl border-4 border-orange-400 p-8 md:p-12">
            <h2 class="text-4xl font-bold text-center mb-10">Fenomena Luar Angkasa</h2>

            <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                <!-- Images -->
                <div class="w-full md:w-1/2">
                    <img src="{{ Vite::asset('resources/img/fenomena.jpg') }}"
                        class="gambar-konten active w-full rounded-lg shadow-lg" id="gambar-konten1">
                    <img src="{{ Vite::asset('resources/img/supernova.jpg') }}" id="gambar-konten2"
                        class="gambar-konten w-full rounded-lg shadow-lg">
                    <img src="{{ Vite::asset('resources/img/black hole.jpg') }}" id="gambar-konten3"
                        class="gambar-konten w-full rounded-lg shadow-lg">
                    <img src="{{ Vite::asset('resources/img/aurora.jpg') }}" id="gambar-konten4"
                        class="gambar-konten w-full rounded-lg shadow-lg">
                    <img src="{{ Vite::asset('resources/img/badai matahari.jpg') }}" id="gambar-konten5"
                        class="gambar-konten w-full rounded-lg shadow-lg">
                    <img src="{{ Vite::asset('resources/img/galaksi spiral.jpg') }}" id="gambar-konten6"
                        class="gambar-konten w-full rounded-lg shadow-lg">
                    <img src="{{ Vite::asset('resources/img/eksoplanet.jpg') }}" id="gambar-konten7"
                        class="gambar-konten w-full rounded-lg shadow-lg">
                    <img src="{{ Vite::asset('resources/img/pulsar.jpg') }}" id="gambar-konten8"
                        class="gambar-konten w-full rounded-lg shadow-lg">
                    <img src="{{ Vite::asset('resources/img/tabrakan.jpg') }}" id="gambar-konten9"
                        class="gambar-konten w-full rounded-lg shadow-lg">
                    <img src="{{ Vite::asset('resources/img/quasar.jpg') }}" id="gambar-konten10"
                        class="gambar-konten w-full rounded-lg shadow-lg">
                </div>

                <!-- Text Content -->
                <div class="w-full md:w-1/2 min-h-[400px]">
                    <div id="teks-konten1" class="teks-konten active space-y-4">
                        <h3 class="text-2xl font-bold text-purple-900">1. Hujan Meteor</h3>
                        <p class="text-lg leading-relaxed">
                            Hujan meteor terjadi ketika Bumi melewati jejak partikel yang ditinggalkan oleh komet atau
                            asteroid. Ketika partikel-partikel ini memasuki atmosfer Bumi, mereka terbakar dan
                            menciptakan garis-garis cahaya yang kita kenal sebagai meteor. Beberapa hujan meteor yang
                            terkenal adalah Perseid, yang terjadi setiap bulan Agustus, dan Geminid, yang terjadi setiap
                            bulan Desember.
                        </p>
                    </div>
                    <div id="teks-konten2" class="teks-konten space-y-4">
                        <h3 class="text-2xl font-bold text-purple-900">2. Supernova</h3>
                        <p class="text-lg leading-relaxed">Supernova adalah ledakan dahsyat yang terjadi pada akhir
                            siklus hidup sebuah bintang besar. Ledakan ini melepaskan energi yang sangat besar dan dapat
                            bersinar lebih terang dari seluruh galaksi untuk sementara waktu. Supernova memainkan peran
                            penting dalam penciptaan elemen berat di alam semesta dan dapat membentuk nebula yang indah
                            seperti Nebula Kepiting.</p>
                    </div>
                    <div id="teks-konten3" class="teks-konten space-y-4">
                        <h3 class="text-2xl font-bold text-purple-900">3. Black Hole (Lubang Hitam)</h3>
                        <p class="text-lg leading-relaxed">Lubang hitam adalah objek yang terbentuk ketika sebuah
                            bintang masif runtuh ke dalam dirinya sendiri di akhir siklus hidupnya, menciptakan area di
                            ruang angkasa dengan gravitasi yang sangat kuat sehingga bahkan cahaya tidak bisa lolos.
                            Black hole sering dikelilingi oleh piringan akresi yang bersinar karena materi yang jatuh ke
                            dalamnya.
                        </p>
                    </div>
                    <div id="teks-konten4" class="teks-konten space-y-4">
                        <h3 class="text-2xl font-bold text-purple-900">4. Aurora</h3>
                        <p class="text-lg leading-relaxed">Aurora, juga dikenal sebagai cahaya utara (Aurora Borealis)
                            di belahan bumi utara dan cahaya selatan (Aurora Australis) di belahan bumi selatan, adalah
                            fenomena cahaya alami yang menakjubkan yang terjadi ketika partikel bermuatan dari angin
                            matahari berinteraksi dengan medan magnet Bumi. Partikel ini terperangkap di atmosfer bagian
                            atas dan menyebabkan pancaran cahaya berwarna-warni.
                        </p>
                    </div>
                    <div id="teks-konten5" class="teks-konten space-y-4">
                        <h3 class="text-2xl font-bold text-purple-900">5. Badai Matahari</h3>
                        <p class="text-lg leading-relaxed">Badai matahari terjadi ketika ada letusan besar energi di
                            permukaan Matahari, yang mengirim partikel bermuatan dan radiasi ke luar angkasa. Badai
                            matahari dapat mempengaruhi komunikasi radio, sistem navigasi, dan bahkan mengganggu
                            jaringan listrik di Bumi.
                        </p>
                    </div>
                    <div id="teks-konten6" class="teks-konten space-y-4">
                        <h3 class="text-2xl font-bold text-purple-900">6. Galaksi Spiral</h3>
                        <p class="text-lg leading-relaxed">Galaksi spiral, seperti galaksi kita, Bima Sakti, memiliki
                            struktur yang indah dengan lengan spiral yang berputar keluar dari pusat galaksi.
                            Lengan-lengan ini penuh dengan bintang muda, gas, dan debu, serta sering menjadi tempat
                            kelahiran bintang baru.
                        </p>
                    </div>
                    <div id="teks-konten7" class="teks-konten space-y-4">
                        <h3 class="text-2xl font-bold text-purple-900">7. Eksoplanet</h3>
                        <p class="text-lg leading-relaxed">Eksoplanet adalah planet yang mengorbit bintang di luar
                            sistem tata surya kita. Penemuan eksoplanet pertama kali terjadi pada tahun 1992, dan sejak
                            itu, ribuan eksoplanet telah ditemukan. Beberapa eksoplanet berada di zona laik huni bintang
                            mereka, di mana kondisi bisa mendukung kehidupan.
                        </p>
                    </div>
                    <div id="teks-konten8" class="teks-konten space-y-4">
                        <h3 class="text-2xl font-bold text-purple-900">8. Pulsar</h3>
                        <p class="text-lg leading-relaxed">Pulsar adalah jenis bintang neutron yang berputar sangat
                            cepat dan memancarkan sinar radio yang sangat kuat. Sinar ini terlihat dari Bumi sebagai
                            denyut radio reguler, mirip dengan mercusuar. Pulsar pertama kali ditemukan pada tahun 1967
                            oleh Jocelyn Bell Burnell.
                        </p>
                    </div>
                    <div id="teks-konten9" class="teks-konten space-y-4">
                        <h3 class="text-2xl font-bold text-purple-900">9. Tabrakan Galaksi</h3>
                        <p class="text-lg leading-relaxed">Ketika dua galaksi bertabrakan, mereka bisa membentuk galaksi
                            baru yang lebih besar. Proses ini sering menghasilkan daerah pembentukan bintang yang intens
                            dan bisa menciptakan struktur galaksi yang unik. Misalnya, Galaksi Antena adalah hasil dari
                            tabrakan dua galaksi spiral.
                        </p>
                    </div>
                    <div id="teks-konten10" class="teks-konten space-y-4">
                        <h3 class="text-2xl font-bold text-purple-900">10. Quasar</h3>
                        <p class="text-lg leading-relaxed">Quasar adalah inti galaksi yang sangat terang dengan lubang
                            hitam supermasif di pusatnya. Quasar adalah beberapa objek paling terang di alam semesta dan
                            dapat melepaskan energi ratusan kali lipat dari seluruh galaksi. Quasar ditemukan pada
                            1960-an dan masih menjadi subjek penelitian intensif.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <div class="flex justify-end items-center gap-6 mt-12">
                <a wire:navigate href="{{ route('menu') }}"
                    class="group bg-red-500 hover:bg-red-600 text-white p-4 rounded-full transition-all duration-300 transform hover:scale-110 cursor-pointer shadow-lg hover:shadow-red-500/50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:animate-pulse" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                </a>
                <div class="flex gap-4">
                    <button id="prevBtn"
                        class="cursor-pointer group bg-gray-100 p-3 rounded-full transition-all duration-300 transform hover:scale-110 hover:bg-purple-100 shadow-lg hover:shadow-purple-500/30">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-gray-600 group-hover:text-purple-600" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="nextBtn"
                        class="cursor-pointer group bg-gray-100 p-3 rounded-full transition-all duration-300 transform hover:scale-110 hover:bg-purple-100 shadow-lg hover:shadow-purple-500/30">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-8 w-8 text-gray-600 group-hover:text-purple-600" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        const texts = document.querySelectorAll('.teks-konten');
        const images = document.querySelectorAll('.gambar-konten');
        let currentIndex = 0;

        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        function updateContent() {
            texts.forEach((text, index) => {
                text.classList.remove('active');
                if (index === currentIndex) {
                    text.classList.add('active');
                }
            });

            images.forEach((image, index) => {
                image.classList.remove('active');
                if (index === currentIndex) {
                    image.classList.add('active');
                }
            });
        }

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateContent();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentIndex < texts.length - 1) {
                currentIndex++;
                updateContent();
            }
        });

        // Inisialisasi konten pertama
        updateContent();

    </script>
</body>

</html>
