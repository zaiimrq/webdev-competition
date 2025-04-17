<x-layouts.app :title="__('Quiz')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            @foreach ($quizzes as $quiz)
                <div
                    class="h-full w-full border-2 border-fuchsia-200 dark:border-fuchsia-800/50 rounded-[1.5em] bg-gradient-to-br from-fuchsia-100 to-fuchsia-50 dark:from-fuchsia-800 dark:to-fuchsia-800/5 p-[1em] flex justify-around items-left flex-col gap-[0.75em] backdrop-blur-md text-fuchsia-950 dark:text-white">
                    <div>
                        <h1 class="text-xl font-medium">{{$quiz->name}}</h1>
                        <p class="text-xs line-clamp-2 text-fuchsia-950/50 dark:text-[rgba(255,255,255,0.5)] mb-2">
                            {{$quiz->description}}
                        </p>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-fuchsia-500 dark:text-blue-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-xs text-fuchsia-500 dark:text-blue-400">{{$quiz->questions->count()}} Questions
                            </p>
                        </div>
                    </div>


                    <a href="/"
                        class="h-fit w-fit px-[1em] py-[0.25em] border-[1px] rounded-full flex justify-center items-center gap-[0.5em] overflow-hidden group hover:translate-y-[0.125em] duration-200 backdrop-blur-md">
                        <p class="text-sm">Start Quiz</p>
                        <svg class="size-4 group-hover:translate-x-[10%] duration-300" stroke="currentColor"
                            stroke-width="1" viewBox="0 0 24 24" fill="white" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" stroke-linejoin="round" stroke-linecap="round">
                            </path>
                        </svg>
                    </a>
                </div>

            @endforeach
        </div>
    </div>
</x-layouts.app>
