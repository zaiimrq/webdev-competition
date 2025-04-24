<x-layouts.guest>
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
                    <a wire:navigate href="/" class="text-gray-700 hover:text-teal-600 transition-colors">Home</a>
                    <div class="h-5 w-px bg-gray-300"></div>
                    <a wire:navigate href="/login" class="text-gray-700 hover:text-teal-600 transition-colors">Masuk</a>
                    <a wire:navigate href="/register"
                        class="bg-gradient-to-r from-green-600 to-teal-600 text-white px-6 py-2 rounded-full hover:shadow-lg transition-all">
                        Daftar
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @livewire('simulation.main')
</x-layouts.guest>
