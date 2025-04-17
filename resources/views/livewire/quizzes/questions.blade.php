<?php

use App\Models\Quiz;
use Livewire\Volt\Component;
use Livewire\Attributes\Lazy;

new
    #[Lazy]
    class extends Component {
    public Quiz $quiz;
    public $userAnswers = [];
    public $isCompleted = false;
    public $score = 0;
    public $error = '';

    public function mount()
    {
        $this->userAnswers = array_fill(0, $this->quiz->questions->count(), '');
        $this->dispatch('init-answers', answers: $this->userAnswers);
    }

    public function selectAnswer($questionIndex, $answer)
    {
        $this->userAnswers[$questionIndex] = strval($answer);
    }

    public function submitQuiz()
    {
        if (in_array('', $this->userAnswers)) {
            $this->error = 'Please answer all questions before submitting.';
            return;
        }

        $this->error = '';
        $this->calculateScore();
    }

    public function calculateScore()
    {
        $this->isCompleted = true;
        $this->score = 0;
        foreach ($this->quiz->questions as $index => $question) {
            $correct = $question->answers->where('is_correct', true)->first();
            if ($correct && $this->userAnswers[$index] == $correct->id) {
                $this->score++;
            }
        }
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div class="w-full max-w-3xl mx-auto p-6">
            <div class="animate-pulse">
                <div class="h-8 bg-fuchsia-200 dark:bg-fuchsia-700 rounded w-1/3 mb-6"></div>
                <div class="space-y-8">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="border-b border-fuchsia-200 dark:border-fuchsia-700 pb-6">
                            <div class="mb-4 flex items-center">
                                <div class="h-6 bg-fuchsia-200 dark:bg-fuchsia-700 rounded-full w-24"></div>
                            </div>
                            <div class="h-6 bg-fuchsia-200 dark:bg-fuchsia-700 rounded w-3/4 mb-4"></div>
                            <div class="space-y-3">
                                @for ($j = 0; $j < 4; $j++)
                                    <div class="flex items-center space-x-3 p-4 bg-fuchsia-100 dark:bg-fuchsia-700/50 rounded-lg">
                                        <div class="w-8 h-8 bg-fuchsia-200 dark:bg-fuchsia-600 rounded-full"></div>
                                        <div class="h-4 bg-fuchsia-200 dark:bg-fuchsia-600 rounded w-3/4"></div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        HTML;
    }
}; ?>

<div class="w-full max-w-3xl mx-auto p-6" x-data="{
    answers: [],
    isLoading: false,
    init() {
        const saved = localStorage.getItem('quiz_{{ $quiz->id }}_answers');
        this.answers = saved ? JSON.parse(saved) : Array({{ $quiz->questions->count() }}).fill('');
        $wire.userAnswers = this.answers;

        $wire.on('init-answers', ({answers}) => {
            this.answers = answers;
            localStorage.setItem('quiz_{{ $quiz->id }}_answers', JSON.stringify(this.answers));
        });

        $watch('isLoading', value => {
            if (!value) return;
            // Optionally, you could add logic here if needed
        });

        $watch('answers', () => {
            // Optionally, you could add logic here if needed
        });
    }
}">
    @if (!$isCompleted)
        <div class="bg-white dark:bg-zinc-900 rounded-xl shadow-lg p-6">
            <div>
                <h1 class="text-2xl font-bold mb-6 text-fuchsia-700 dark:text-fuchsia-300">{{ $quiz->name }}</h1>
                @if($quiz->questions->isEmpty())
                    <div class="text-center py-12">
                        <p class="text-fuchsia-600 dark:text-fuchsia-300 text-lg font-semibold">
                            No questions available for this quiz.
                        </p>
                    </div>
                @else
                    <div class="space-y-8">
                        @foreach ($quiz->questions as $index => $question)
                            <div class="border-b border-fuchsia-200 dark:border-fuchsia-700 pb-6 last:border-0">
                                <div class="mb-4">
                                    <span
                                        class="px-3 py-1 bg-fuchsia-100 dark:bg-fuchsia-900 text-fuchsia-700 dark:text-fuchsia-300 rounded-full text-sm font-medium">
                                        Question {{ $index + 1 }}
                                    </span>
                                    <h2 class="text-xl font-semibold mt-2 text-fuchsia-800 dark:text-fuchsia-200">
                                        {{ $question->name }}
                                    </h2>
                                </div>
                                <div class="grid grid-cols-1 gap-3">
                                    @foreach ($question->answers as $answer)
                                        <button type="button"
                                            x-on:click="answers[{{ $index }}] = '{{ $answer->id }}';
                                                                                                                  localStorage.setItem('quiz_{{ $quiz->id }}_answers', JSON.stringify(answers));
                                                                                                                  $wire.selectAnswer({{ $index }}, '{{ $answer->id }}')"
                                            x-bind:class="answers[{{ $index }}] == '{{ $answer->id }}'
                                                                                                                            ? 'bg-fuchsia-100 dark:bg-fuchsia-900 border-2 border-fuchsia-500 shadow-md'
                                                                                                                            : 'bg-zinc-50 dark:bg-zinc-800 hover:bg-fuchsia-50 dark:hover:bg-fuchsia-900/30 border-2 border-transparent'"
                                            class="group relative w-full text-left p-4 rounded-lg transition-all duration-200 ease-in-out">
                                            <div class="flex items-center space-x-3">
                                                <span
                                                    x-bind:class="answers[{{ $index }}] == '{{ $answer->id }}'
                                                                                                                                ? 'bg-fuchsia-500 text-white'
                                                                                                                                : 'bg-fuchsia-200 dark:bg-fuchsia-600 group-hover:bg-fuchsia-300 dark:group-hover:bg-fuchsia-800'"
                                                    class="flex items-center justify-center w-8 h-8 rounded-full">
                                                    {{ $loop->iteration }}
                                                </span>
                                                <span class="text-fuchsia-900 dark:text-fuchsia-100">{{ $answer->name }}</span>
                                            </div>
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-8 text-center">
                        @if($error)
                            <script>
                                document.addEventListener('alpine:init', () => {
                                    Alpine.store('quizError', true);
                                });
                            </script>
                            <p class="text-red-500 mb-4" x-init="isLoading = false">{{ $error }}</p>
                        @endif
                        <button x-bind:disabled="isLoading" x-on:click="
                                        isLoading = true;
                                        $nextTick(() => {
                                            $wire.submitQuiz().then(() => {
                                                isLoading = false;
                                            }).catch(() => {
                                                isLoading = false;
                                            });
                                        });
                                    " class="px-8 py-3 rounded-lg bg-fuchsia-600 hover:bg-fuchsia-700 text-white
                                           shadow-lg hover:shadow-fuchsia-500/20 transition-all duration-200
                                           font-semibold cursor-pointer transform hover:scale-105
                                           active:scale-95 inline-flex items-center relative">
                            <template x-if="isLoading">
                                <svg class="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                                    </circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                                </svg>
                            </template>
                            <span x-text="isLoading ? 'Submitting...' : 'Submit Quiz'"></span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
    @else
        <div class="bg-white dark:bg-zinc-900 rounded-xl shadow-lg p-6 text-center">
            <h2 class="text-2xl font-bold mb-4 text-fuchsia-700 dark:text-fuchsia-300">Quiz Completed!</h2>
            <p class="text-lg text-fuchsia-900 dark:text-fuchsia-100">Your score: {{ $score }} out of
                {{ $quiz->questions->count() }}
            </p>
            <p class="text-fuchsia-500 dark:text-fuchsia-400 mt-2">
                Correct: {{ $score }} | Incorrect: {{ $quiz->questions->count() - $score }}
            </p>
            <a wire:navigate href="/quizzes"
                class="mt-6 inline-block px-6 py-2 rounded-lg bg-fuchsia-600 hover:bg-fuchsia-700 text-white font-semibold shadow transition-all duration-200">
                &larr; Back to Quizzes
            </a>
        </div>
    @endif
</div>
