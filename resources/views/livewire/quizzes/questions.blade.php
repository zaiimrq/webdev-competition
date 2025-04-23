<?php

use App\Models\Quiz;
use App\Models\UserAnswer;
use Livewire\Volt\Component;
use Livewire\Attributes\Lazy;
use Livewire\Attributes\Computed;

new
    #[Lazy]
    class extends Component {
    public Quiz $quiz;
    public $userAnswers = [];
    public $isCompleted = false;
    public $score = 0;
    public $error = '';
    public $showResults = false;

    public function mount()
    {
        $this->userAnswers = array_fill(0, $this->quiz->questions->count(), '');

        // Load previous answers if they exist
        $previousAnswers = UserAnswer::where('quiz_id', $this->quiz->id)
            ->where('user_id', auth()->id())
            ->get();

        if ($previousAnswers->isNotEmpty()) {
            foreach ($previousAnswers as $answer) {
                $questionIndex = $this->quiz->questions->search(function ($q) use ($answer) {
                    return $q->id === $answer->question_id;
                });
                if ($questionIndex !== false) {
                    $this->userAnswers[$questionIndex] = $answer->answer_id;
                }
            }
        }
    }

    public function selectAnswer($questionIndex, $answer)
    {
        $this->userAnswers[$questionIndex] = strval($answer);
    }

    public function submitQuiz()
    {
        if (in_array('', $this->userAnswers)) {
            $this->error = 'Silahkan jawab semua pertanyaan sebelum mengirim.';
            return;
        }

        $this->error = '';

        // Save all answers and calculate score
        foreach ($this->quiz->questions as $index => $question) {
            $answerId = $this->userAnswers[$index];
            $correctAnswer = $question->answers->where('id', $answerId)->where('is_correct', true)->first();
            $isCorrect = $correctAnswer !== null;

            UserAnswer::updateOrCreate(
                [
                    'quiz_id' => $this->quiz->id,
                    'user_id' => auth()->id(),
                    'question_id' => $question->id,
                ],
                [
                    'answer_id' => $answerId,
                    'is_correct' => $isCorrect,
                    'score' => $isCorrect ? 1 : 0,
                ]
            );
        }

        $this->showResults = true;
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

    #[Computed]
    public function placeholder()
    {
        return view('livewire.quizzes.questions-skeleton');
    }
}; ?>

<div class="w-full max-w-3xl mx-auto p-6" x-data="{
    answers: @entangle('userAnswers'),
    isLoading: false,
    init() {
        $watch('isLoading', value => {
            if (!value) return;
        });
    }
}">
    @if (!$isCompleted)
        <div class="bg-white/80 dark:bg-zinc-800 backdrop-blur-sm p-6">
            <div>
                <!-- Quiz Header Section -->
                <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6 mb-8">
                    <div class="flex items-center justify-between mb-4">
                        <h1 class="text-2xl font-bold text-zinc-800 dark:text-zinc-100">{{ $quiz->name }}</h1>
                    </div>

                    @if($quiz->description)
                        <p class="text-zinc-600 dark:text-zinc-400 mb-4">{{ $quiz->description }}</p>
                    @endif

                    <!-- Quiz Info -->
                    <div class="flex items-center space-x-6 text-sm text-zinc-500 dark:text-zinc-400">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>{{ $quiz->created_at->format('d M Y') }}</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            <span>{{ $quiz->questions->count() }} Pertanyaan</span>
                        </div>
                    </div>
                </div>

                @if($quiz->questions->isEmpty())
                    <div class="text-center py-12">
                        <p class="text-zinc-600 dark:text-zinc-400 text-lg font-medium">
                            Tidak ada pertanyaan tersedia untuk quiz ini.
                        </p>
                    </div>
                @else
                    <div class="space-y-8">
                        @foreach ($quiz->questions as $index => $question)
                            <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6 last:border-0">
                                <div class="mb-4">
                                    <span
                                        class="px-3 py-1 bg-green-100/80 dark:bg-green-900/30 text-green-600 dark:text-green-300 rounded-full text-sm font-medium">
                                        Pertanyaan {{ $index + 1 }}
                                    </span>
                                    <h2 class="text-xl font-semibold mt-2 text-zinc-700 dark:text-zinc-200">
                                        {{ $question->name }}
                                    </h2>
                                </div>
                                <div class="grid grid-cols-1 gap-3">
                                    @foreach ($question->answers as $answer)
                                        <button type="button"
                                            x-on:click="answers[{{ $index }}] = '{{ $answer->id }}';
                                                                                                                                                            $wire.selectAnswer({{ $index }}, '{{ $answer->id }}')"
                                            x-bind:class="answers[{{ $index }}] == '{{ $answer->id }}'
                                                                                                                                                                                                                                                ? 'bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-700 shadow-sm'
                                                                                                                                                                                                                                                : 'bg-white dark:bg-zinc-800/50 hover:bg-green-50/50 dark:hover:bg-green-900/10 border border-zinc-200 dark:border-zinc-700'"
                                            class="group relative w-full text-left p-4 rounded-lg transition-all duration-200 ease-in-out">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center space-x-3">
                                                    <span
                                                        x-bind:class="answers[{{ $index }}] == '{{ $answer->id }}'
                                                                                                                                                                                                                                                    ? 'bg-green-500/80 text-white'
                                                                                                                                                                                                                                                    : 'bg-zinc-100 dark:bg-zinc-700 text-zinc-600 dark:text-zinc-400 group-hover:bg-green-100 dark:group-hover:bg-green-800/30'"
                                                        class="flex items-center justify-center w-8 h-8 rounded-full transition-colors">
                                                        {{ $loop->iteration }}
                                                    </span>
                                                    <span class="text-zinc-700 dark:text-zinc-300">{{ $answer->name }}</span>
                                                </div>
                                                @if($showResults && $userAnswers[$index] == $answer->id)
                                                    @if($answer->is_correct)
                                                        <span class="text-green-600 dark:text-green-400">
                                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                    d="M5 13l4 4L19 7" />
                                                            </svg>
                                                        </span>
                                                    @else
                                                        <span class="text-red-600 dark:text-red-400">
                                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                    d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </span>
                                                    @endif
                                                @endif
                                            </div>
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-8 text-center">
                        @if($error)
                            <p class="text-rose-500 dark:text-rose-400 mb-4" x-init="isLoading = false">{{ $error }}</p>
                        @endif
                        <button x-bind:disabled="isLoading"
                            x-on:click="isLoading = true;
                                                                                                                                      $nextTick(() => {
                                                                                                                                          $wire.submitQuiz().then(() => {
                                                                                                                                              isLoading = false;
                                                                                                                                          }).catch(() => {
                                                                                                                                              isLoading = false;
                                                                                                                                          });
                                                                                                                                      });"
                            class="px-8 py-3 rounded-lg bg-green-500/90 hover:bg-green-600/90 dark:bg-green-600/80 dark:hover:bg-green-700/80 text-white
                                                                                                                                   shadow-md hover:shadow-green-500/10 dark:hover:shadow-green-500/5 transition-all duration-200
                                                                                                                                   font-medium disabled:opacity-50 disabled:cursor-not-allowed">
                            <template x-if="isLoading">
                                <svg class="animate-spin h-5 w-5 mr-2 text-white inline-block"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4">
                                    </circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"></path>
                                </svg>
                            </template>
                            <span x-text="isLoading ? 'Mengirim...' : 'Kirim Jawaban'"></span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
    @else
        <div class="bg-white/80 dark:bg-zinc-900/90 backdrop-blur-sm rounded-xl shadow-lg p-6 text-center">
            <h2 class="text-2xl font-bold mb-4 text-zinc-800 dark:text-zinc-100">Quiz Selesai!</h2>
            <p class="text-lg text-zinc-700 dark:text-zinc-300">Nilai Anda: {{ $score }} dari
                {{ $quiz->questions->count() }}
            </p>
            <p class="text-zinc-500 dark:text-zinc-400 mt-2">
                Benar: {{ $score }} | Salah: {{ $quiz->questions->count() - $score }}
            </p>

            <button wire:click="$set('isCompleted', false)"
                class="mt-6 inline-block px-6 py-2 rounded-lg bg-green-500/90 hover:bg-green-600/90 dark:bg-green-600/80 dark:hover:bg-green-700/80 text-white font-medium shadow-md transition-all duration-200">
                &larr; Lihat Jawaban
            </button>
        </div>
    @endif
</div>
