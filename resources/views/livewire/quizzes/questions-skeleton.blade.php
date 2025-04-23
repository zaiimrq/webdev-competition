<div class="w-full max-w-3xl mx-auto p-6">
    <div class="animate-pulse">
        <div class="h-8 bg-zinc-200 dark:bg-zinc-700 rounded w-1/3 mb-6"></div>
        <div class="space-y-8">
            @for ($i = 0; $i < 3; $i++)
                <div class="border-b border-zinc-200 dark:border-zinc-700 pb-6">
                    <div class="mb-4 flex items-center">
                        <div class="h-6 bg-zinc-200 dark:bg-zinc-700 rounded-full w-24"></div>
                    </div>
                    <div class="h-6 bg-zinc-200 dark:bg-zinc-700 rounded w-3/4 mb-4"></div>
                    <div class="space-y-3">
                        @for ($j = 0; $j < 4; $j++)
                            <div class="flex items-center space-x-3 p-4 bg-zinc-100 dark:bg-zinc-700/50 rounded-lg">
                                <div class="w-8 h-8 bg-zinc-200 dark:bg-zinc-600 rounded-full"></div>
                                <div class="h-4 bg-zinc-200 dark:bg-zinc-600 rounded w-3/4"></div>
                            </div>
                        @endfor
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
