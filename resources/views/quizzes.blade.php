<x-layouts.app :title="__('Quiz')">
    <div class="flex h-full w-full flex-1 flex-col gap-8 rounded-xl">
        <!-- Hero Section -->
        <div
            class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-fuchsia-100 to-fuchsia-50 dark:from-fuchsia-900/40 dark:to-fuchsia-800/5 p-8">
            <div class="relative z-10">
                <h1 class="text-3xl font-bold text-zinc-900 dark:text-white mb-2">Quiz Collection</h1>
                <p class="text-zinc-600 dark:text-zinc-300 mb-6 max-w-2xl">Explore our collection of quizzes designed to
                    test and improve your knowledge across various topics.</p>
            </div>

            <!-- Decorative Elements -->
            <div class="absolute right-0 top-0 -translate-y-1/4 translate-x-1/4 opacity-20">
                <svg class="h-64 w-64" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 6C5.11 6 0 9.57 0 14c0 3.03 2.42 5.17 6 6.41V24l4-4-4-4v2.46c-2.46-1.01-4-2.49-4-4.46 0-2.76 3.58-6 10-6s10 3.24 10 6c0 1.97-1.54 3.45-4 4.46v2.01c3.58-1.24 6-3.37 6-6.41 0-4.43-5.11-8-14-8z" />
                </svg>
            </div>
        </div>

        <!-- Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div
                class="flex items-center gap-4 p-4 rounded-xl bg-white/80 dark:bg-zinc-800/80 border border-zinc-200 dark:border-zinc-700">
                <div class="p-3 rounded-lg bg-fuchsia-100 dark:bg-fuchsia-900/30">
                    <svg class="w-6 h-6 text-fuchsia-600 dark:text-fuchsia-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-zinc-600 dark:text-zinc-400">Total Quizzes</p>
                    <p class="text-2xl font-semibold text-zinc-900 dark:text-white">{{ $quizzes->count() }}</p>
                </div>
            </div>
            <!-- Add more stats cards as needed -->
        </div>

        <!-- Quiz Grid -->
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            @foreach ($quizzes as $quiz)
                <div
                    class="group h-full w-full overflow-hidden rounded-xl bg-white/80 dark:bg-zinc-800/80 border border-zinc-200 dark:border-zinc-700 transition-all duration-300 hover:shadow-lg hover:shadow-fuchsia-500/5 p-6">
                    <div class="flex flex-col h-full">
                        <div class="flex-1">
                            <h2 class="text-xl font-semibold text-zinc-900 dark:text-white mb-3">{{$quiz->name}}</h2>
                            <p class="text-sm text-zinc-600 dark:text-zinc-400 line-clamp-2">{{$quiz->description}}</p>
                        </div>

                        <div
                            class="flex items-center justify-between pt-4 mt-4 border-t border-zinc-100 dark:border-zinc-700/50">
                            <div class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-fuchsia-500/80 dark:text-fuchsia-400/80" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="text-sm text-zinc-600 dark:text-zinc-400">{{$quiz->questions->count()}}
                                    Questions</span>
                            </div>

                            <a wire:navigate href="{{ route('quizzes.questions', $quiz->slug) }}"
                                class="inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-fuchsia-500/10 hover:bg-fuchsia-500/20 dark:bg-fuchsia-500/5 dark:hover:bg-fuchsia-500/10 text-fuchsia-600 dark:text-fuchsia-400 font-medium text-sm transition-all duration-200 group-hover:bg-fuchsia-500 group-hover:text-white dark:group-hover:bg-fuchsia-500 dark:group-hover:text-white">
                                Start Quiz
                                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>
