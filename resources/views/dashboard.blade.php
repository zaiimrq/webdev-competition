<x-layouts.app :title="__('Beranda')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        <!-- Stats Overview Cards -->
        <div class="grid auto-rows-min gap-6 md:grid-cols-3">
            <!-- Completed Quizzes Card -->
            <div
                class="group relative overflow-hidden rounded-xl border border-neutral-200 bg-gradient-to-br from-white to-neutral-50 p-6 shadow-sm transition-all duration-300 hover:shadow-md dark:border-neutral-700 dark:from-neutral-800 dark:to-neutral-900">
                <div class="flex h-full flex-col">
                    <h3 class="text-lg font-medium text-neutral-800 dark:text-neutral-200">Quiz Selesai</h3>
                    <div class="flex flex-1 items-center justify-between mt-4">
                        <div>
                            <span
                                class="text-4xl font-bold text-neutral-900 dark:text-white">{{ $completedQuizzes }}/{{ $totalQuizzes }}</span>
                            <p class="mt-1 text-sm text-neutral-500">Total Progres</p>
                        </div>
                        <div
                            class="rounded-full bg-green-100/80 p-3 text-green-600 shadow-sm transition-transform duration-300 group-hover:scale-110 dark:bg-green-900/30 dark:text-green-400">
                            <i class="fa-solid fa-check-circle text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Average Score Card -->
            <div
                class="group relative overflow-hidden rounded-xl border border-neutral-200 bg-gradient-to-br from-white to-neutral-50 p-6 shadow-sm transition-all duration-300 hover:shadow-md dark:border-neutral-700 dark:from-neutral-800 dark:to-neutral-900">
                <div class="flex h-full flex-col">
                    <h3 class="text-lg font-medium text-neutral-800 dark:text-neutral-200">Nilai Rata-rata</h3>
                    <div class="flex flex-1 items-center justify-between mt-4">
                        <div>
                            <span
                                class="text-4xl font-bold text-neutral-900 dark:text-white">{{ number_format($averageScore, 1) }}</span>
                            <p class="mt-1 text-sm text-neutral-500">Rata-rata Skor</p>
                        </div>
                        <div
                            class="rounded-full bg-yellow-100/80 p-3 text-yellow-600 shadow-sm transition-transform duration-300 group-hover:scale-110 dark:bg-yellow-900/30 dark:text-yellow-400">
                            <i class="fa-solid fa-star text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Remaining Quizzes Card -->
            <div
                class="group relative overflow-hidden rounded-xl border border-neutral-200 bg-gradient-to-br from-white to-neutral-50 p-6 shadow-sm transition-all duration-300 hover:shadow-md dark:border-neutral-700 dark:from-neutral-800 dark:to-neutral-900">
                <div class="flex h-full flex-col">
                    <h3 class="text-lg font-medium text-neutral-800 dark:text-neutral-200">Quiz Tersisa</h3>
                    <div class="flex flex-1 items-center justify-between mt-4">
                        <div>
                            <span
                                class="text-4xl font-bold text-neutral-900 dark:text-white">{{ $remainingQuizzes }}</span>
                            <p class="mt-1 text-sm text-neutral-500">Quiz Belum Selesai</p>
                        </div>
                        <div
                            class="rounded-full bg-blue-100/80 p-3 text-blue-600 shadow-sm transition-transform duration-300 group-hover:scale-110 dark:bg-blue-900/30 dark:text-blue-400">
                            <i class="fa-solid fa-hourglass-half text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Progress Section -->
        <div class="grid gap-6 lg:grid-cols-3">
            <!-- Quiz Progress & Statistics -->
            <div class="col-span-2 space-y-6">
                <!-- Status Overview -->
                <div
                    class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-800">
                    <h3 class="mb-4 text-lg font-semibold text-neutral-900 dark:text-white">Status Quiz</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="h-3 w-3 rounded-full bg-green-500"></div>
                                <span class="text-sm text-neutral-600 dark:text-neutral-400">Terjawab</span>
                            </div>
                            <span class="font-medium text-green-500">{{ $completedQuizzes }} quiz</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="h-3 w-3 rounded-full bg-red-500"></div>
                                <span class="text-sm text-neutral-600 dark:text-neutral-400">Belum Terjawab</span>
                            </div>
                            <span class="font-medium text-red-500">{{ $remainingQuizzes }} quiz</span>
                        </div>
                        <div class="mt-4">
                            <div class="h-2.5 w-full overflow-hidden rounded-full bg-neutral-100 dark:bg-neutral-700">
                                <div class="h-full rounded-full bg-gradient-to-r from-green-500 to-green-400 transition-all duration-500"
                                    style="width: {{ $totalQuizzes > 0 ? ($completedQuizzes / $totalQuizzes) * 100 : 0 }}%">
                                </div>
                            </div>
                            <p class="mt-2 text-xs text-neutral-500 text-right">
                                {{ $totalQuizzes > 0 ? round(($completedQuizzes / $totalQuizzes) * 100) : 0 }}% Selesai
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Recent Quizzes -->
                <div
                    class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-800">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-semibold text-neutral-900 dark:text-white">Quiz Terakhir</h3>
                        <a href="{{ route('quizzes') }}"
                            class="text-sm text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-300">Lihat
                            Semua</a>
                    </div>
                    <div class="space-y-4">
                        @forelse($recentQuizzes as $quiz)
                            <div
                                class="group flex items-center gap-4 rounded-xl border border-neutral-100 bg-neutral-50/50 p-4 transition-all duration-300 hover:bg-white hover:shadow-sm dark:border-neutral-700 dark:bg-neutral-800/50 dark:hover:bg-neutral-800">
                                <div
                                    class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-100 text-blue-600 dark:bg-blue-900/30 dark:text-blue-400">
                                    <i class="fa-solid fa-book text-xl"></i>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-medium text-neutral-900 dark:text-white">{{ $quiz->quiz->name }}</h4>
                                    <p class="text-sm text-neutral-500">Selesai
                                        {{ \Carbon\Carbon::parse($quiz->last_attempt)->diffForHumans() }}
                                    </p>
                                </div>
                                <div class="text-right">
                                    <span
                                        class="text-lg font-semibold {{ $quiz->avg_score >= 60 ? 'text-green-500' : 'text-blue-500' }}">{{ round($quiz->avg_score) }}</span>
                                    <p class="text-sm text-neutral-500">Skor</p>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-4">
                                <p class="text-neutral-500 dark:text-neutral-400">Belum ada quiz yang diselesaikan</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Leaderboard Section -->
            <div class="space-y-6">
                <div
                    class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-800">
                    <h3 class="mb-6 text-lg font-semibold text-neutral-900 dark:text-white">Papan Peringkat</h3>
                    <div class="space-y-4">
                        @forelse($leaderboard as $index => $entry)
                            <div
                                class="group flex items-center gap-4 rounded-xl border border-neutral-100 bg-neutral-50/50 p-4 transition-all duration-300 hover:bg-white hover:shadow-sm dark:border-neutral-700 dark:bg-neutral-800/50 dark:hover:bg-neutral-800">
                                <div
                                    class="flex h-8 w-8 items-center justify-center rounded-full {{ $index < 3 ? 'bg-yellow-100 text-yellow-600 dark:bg-yellow-900/30 dark:text-yellow-400' : 'bg-neutral-100 text-neutral-600 dark:bg-neutral-700 dark:text-neutral-400' }}">
                                    <span class="text-sm font-bold">#{{ $index + 1 }}</span>
                                </div>
                                <img src="https://ui-avatars.com/api/?name={{ urlencode($entry->user->name) }}&background=random"
                                    class="h-10 w-10 rounded-full ring-2 ring-white dark:ring-neutral-700"
                                    alt="{{ $entry->user->name }}'s avatar">
                                <div class="flex-1">
                                    <h4 class="font-medium text-neutral-900 dark:text-white">{{ $entry->user->name }}</h4>
                                    <p class="text-sm text-neutral-500">{{ round($entry->total_score) }} poin</p>
                                </div>
                                @if($index === 0)
                                    <div
                                        class="rounded-full bg-yellow-100/80 p-2 text-yellow-600 dark:bg-yellow-900/30 dark:text-yellow-400">
                                        <i class="fa-solid fa-crown text-lg"></i>
                                    </div>
                                @endif
                            </div>
                        @empty
                            <div class="text-center py-4">
                                <p class="text-neutral-500 dark:text-neutral-400">Belum ada data</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Coming Soon Quiz -->
                <div
                    class="rounded-xl border border-neutral-200 bg-white p-6 shadow-sm dark:border-neutral-700 dark:bg-neutral-800">
                    <h3 class="mb-6 text-lg font-semibold text-neutral-900 dark:text-white">Quiz Mendatang</h3>
                    <div class="space-y-4">
                        @if($remainingQuizzes > 0)
                            @foreach(range(1, min(2, $remainingQuizzes)) as $i)
                                <div
                                    class="rounded-xl border border-neutral-100 bg-neutral-50/50 p-4 transition-all duration-300 hover:bg-white hover:shadow-sm dark:border-neutral-700 dark:bg-neutral-800/50 dark:hover:bg-neutral-800">
                                    <div class="mb-2 flex items-center justify-between">
                                        <h4 class="font-medium text-neutral-900 dark:text-white">Quiz #{{ $i }}</h4>
                                        <span
                                            class="rounded-full bg-blue-100 px-2.5 py-1 text-xs font-medium text-blue-600 dark:bg-blue-900/30 dark:text-blue-400">Tersedia</span>
                                    </div>
                                    <p class="text-sm text-neutral-500">Dimulai {{ now()->addDays($i)->diffForHumans() }}</p>
                                </div>
                            @endforeach
                        @else
                            <div class="text-center py-4">
                                <p class="text-neutral-500 dark:text-neutral-400">Semua quiz telah diselesaikan</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
