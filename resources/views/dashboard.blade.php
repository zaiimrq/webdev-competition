<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-neutral-800">
                <div class="flex h-full flex-col">
                    <h3 class="text-lg font-medium">Quiz Selesai</h3>
                    <div class="flex flex-1 items-center justify-between">
                        <span class="text-3xl font-bold">{{ $completedQuizzes }}/{{ $totalQuizzes }}</span>
                        <i class="fa-solid fa-check-circle text-3xl text-green-500"></i>
                    </div>
                </div>
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-neutral-800">
                <div class="flex h-full flex-col">
                    <h3 class="text-lg font-medium">Nilai Rata-rata</h3>
                    <div class="flex flex-1 items-center justify-between">
                        <span class="text-3xl font-bold">{{ number_format($averageScore, 1) }}</span>
                        <i class="fa-solid fa-star text-3xl text-yellow-500"></i>
                    </div>
                </div>
            </div>
            <div
                class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 bg-white p-4 dark:border-neutral-700 dark:bg-neutral-800">
                <div class="flex h-full flex-col">
                    <h3 class="text-lg font-medium">Quiz Tersisa</h3>
                    <div class="flex flex-1 items-center justify-between">
                        <span class="text-3xl font-bold">{{ $remainingQuizzes }}</span>
                        <i class="fa-solid fa-hourglass-half text-3xl text-blue-500"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid gap-4 lg:grid-cols-3">
            <div class="col-span-2 space-y-4">
                <div
                    class="rounded-xl border border-neutral-200 bg-white p-6 dark:border-neutral-700 dark:bg-neutral-800">
                    <h2 class="mb-4 text-xl font-semibold">Leaderboard</h2>
                    <div class="space-y-4">
                        @foreach(range(1, 5) as $i)
                            <div
                                class="flex items-center gap-4 rounded-lg border border-neutral-100 p-4 dark:border-neutral-700">
                                <div
                                    class="flex h-8 w-8 items-center justify-center rounded-full {{ $i <= 3 ? 'bg-yellow-100 text-yellow-600' : 'bg-neutral-100 text-neutral-600' }}">
                                    <span class="text-sm font-bold">#{{ $i }}</span>
                                </div>
                                <img src="https://ui-avatars.com/api/?name=User+{{ $i }}" class="h-12 w-12 rounded-full"
                                    alt="User avatar">
                                <div class="flex-1">
                                    <h3 class="font-medium">User {{ $i }}</h3>
                                    <p class="text-sm text-neutral-500">{{ 100 - ($i * 5) }} poin</p>
                                </div>
                                @if($i === 1)
                                    <i class="fa-solid fa-crown text-2xl text-yellow-500"></i>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>

                <div
                    class="rounded-xl border border-neutral-200 bg-white p-6 dark:border-neutral-700 dark:bg-neutral-800">
                    <h2 class="mb-4 text-xl font-semibold">Quiz Terakhir</h2>
                    <div class="space-y-4">
                        @foreach(range(1, 3) as $i)
                            <div
                                class="flex items-center gap-4 rounded-lg border border-neutral-100 p-4 dark:border-neutral-700">
                                <img src="https://via.placeholder.com/60" class="h-15 w-15 rounded-lg object-cover"
                                    alt="Quiz thumbnail">
                                <div class="flex-1">
                                    <h3 class="font-medium">Quiz JavaScript Dasar #{{ $i }}</h3>
                                    <p class="text-sm text-neutral-500">Selesai {{ now()->subDays($i)->diffForHumans() }}
                                    </p>
                                </div>
                                <div class="text-right">
                                    <span class="text-lg font-semibold">85</span>
                                    <p class="text-sm text-green-500">Lulus</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <div
                    class="rounded-xl border border-neutral-200 bg-white p-6 dark:border-neutral-700 dark:bg-neutral-800">
                    <h2 class="mb-4 text-xl font-semibold">Quiz Mendatang</h2>
                    <div class="space-y-4">
                        @foreach(range(1, 2) as $i)
                            <div class="rounded-lg border border-neutral-100 p-4 dark:border-neutral-700">
                                <div class="mb-2 flex items-center justify-between">
                                    <h3 class="font-medium">Laravel Basic #{{ $i }}</h3>
                                    <span
                                        class="rounded-full bg-blue-100 px-2 py-1 text-xs font-medium text-blue-600">Tersedia</span>
                                </div>
                                <p class="text-sm text-neutral-500">Mulai dalam {{ now()->addDays($i)->diffForHumans() }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    @endpush
</x-layouts.app>
