<x-layouts.guest>
    <div
        class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-50 to-teal-50 relative overflow-hidden">
        <!-- Decorative circles -->
        <div
            class="absolute -top-20 -left-20 w-64 h-64 bg-gradient-to-br from-green-200 to-teal-200 rounded-full opacity-20 animate-pulse">
        </div>
        <div
            class="absolute -bottom-32 -right-32 w-96 h-96 bg-gradient-to-br from-teal-200 to-green-200 rounded-full opacity-20 animate-pulse delay-700">
        </div>

        <div class="text-center relative z-10">
            <div class="animate-bounce-slow">
                <h1
                    class="text-7xl font-bold bg-gradient-to-r from-green-500 to-teal-500 bg-clip-text text-transparent leading-tight animate-gradient">
                    404</h1>
            </div>
            <h2 class="mt-4 text-4xl font-bold text-gray-800 animate-fade-in">Halaman Tidak Ditemukan</h2>
            <p class="mt-4 text-gray-600 text-lg max-w-md mx-auto animate-fade-in-delay">Maaf, halaman yang Anda cari
                tidak dapat ditemukan.</p>
            <div class="mt-8 animate-fade-in-delay-2">
                <a wire:navigate href="/"
                    class="group bg-gradient-to-r from-green-500 to-teal-500 hover:from-green-600 hover:to-teal-600 text-white px-8 py-3 rounded-full transition-all duration-300 shadow-lg hover:shadow-2xl inline-flex items-center space-x-2 transform hover:-translate-y-1">
                    <span class="transform group-hover:translate-x-1 transition-transform">←</span>
                    <span>Kembali ke Beranda</span>
                </a>
            </div>
        </div>
    </div>

    <style>
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient 8s ease infinite;
        }

        .animate-bounce-slow {
            animation: bounce 3s infinite;
        }

        .animate-fade-in {
            opacity: 0;
            animation: fadeIn 0.8s ease-out forwards;
        }

        .animate-fade-in-delay {
            opacity: 0;
            animation: fadeIn 0.8s ease-out 0.3s forwards;
        }

        .animate-fade-in-delay-2 {
            opacity: 0;
            animation: fadeIn 0.8s ease-out 0.6s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</x-layouts.guest>
