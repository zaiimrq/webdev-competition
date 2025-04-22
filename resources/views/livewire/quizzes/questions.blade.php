<?php

use App\Models\Quiz;
use App\Models\UserAnswer;
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
    public $leaderboard = [];
    public $totalParticipants = 0;

    public function mount()
    {
        $this->userAnswers = array_fill(0, $this->quiz->questions->count(), '');
        $this->dispatch('init-answers', answers: $this->userAnswers);
        $this->loadLeaderboard();
    }

    public function loadLeaderboard()
    {
        $this->leaderboard = UserAnswer::query()
            ->where('quiz_id', $this->quiz->id)
            ->select('id', 'user_id', \DB::raw('SUM(score) as total_score'))
            ->with([
                'user' => function ($query) {
                    $query->select('id', 'name');
                }
            ])
            ->groupBy('user_id')
            ->orderByDesc(\DB::raw('SUM(score)'))
            ->limit(10)
            ->get();

        $this->totalParticipants = UserAnswer::where('quiz_id', $this->quiz->id)
            ->distinct('user_id')
            ->count('user_id');
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
        $this->storeUserAnswers();
        $this->loadLeaderboard();
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

    public function storeUserAnswers()
    {
        foreach ($this->quiz->questions as $index => $question) {
            $answerId = $this->userAnswers[$index];
            $correctAnswer = $question->answers->where('id', $answerId)->where('is_correct', true)->first();
            $isCorrect = $correctAnswer !== null;

            UserAnswer::create([
                'quiz_id' => $this->quiz->id,
                'user_id' => auth()->id(),
                'question_id' => $question->id,
                'answer_id' => $answerId,
                'is_correct' => $isCorrect,
                'score' => $isCorrect ? 1 : 0,
            ]);
        }
    }

    #[Computed()]
    public function placeholder()
    {
        return view('livewire.quizzes.questions-skeleton');
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
        });

        $watch('answers', () => {
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
                            <span>{{ $quiz->created_at->format('M d, Y') }}</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            <span>{{ $quiz->questions->count() }} Questions</span>
                        </div>
                    </div>
                </div>

                @if($quiz->questions->isEmpty())
                    <div class="text-center py-12">
                        <p class="text-zinc-600 dark:text-zinc-400 text-lg font-medium">
                            No questions available for this quiz.
                        </p>
                    </div>
                @else
                    <div class="space-y-8">
                        @foreach ($quiz->questions as $index => $question)
                            <div class="border-b border-zinc-200 dark:border-zinc-800 pb-6 last:border-0">
                                <div class="mb-4">
                                    <span
                                        class="px-3 py-1 bg-blue-100/80 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 rounded-full text-sm font-medium">
                                        Question {{ $index + 1 }}
                                    </span>
                                    <h2 class="text-xl font-semibold mt-2 text-zinc-700 dark:text-zinc-200">
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
                                                                                                                                ? 'bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-700 shadow-sm'
                                                                                                                                : 'bg-white dark:bg-zinc-800/50 hover:bg-blue-50/50 dark:hover:bg-blue-900/10 border border-zinc-200 dark:border-zinc-700'"
                                            class="group relative w-full text-left p-4 rounded-lg transition-all duration-200 ease-in-out">
                                            <div class="flex items-center space-x-3">
                                                <span
                                                    x-bind:class="answers[{{ $index }}] == '{{ $answer->id }}'
                                                                                                                                    ? 'bg-blue-500/80 text-white'
                                                                                                                                    : 'bg-zinc-100 dark:bg-zinc-700 text-zinc-600 dark:text-zinc-400 group-hover:bg-blue-100 dark:group-hover:bg-blue-800/30'"
                                                    class="flex items-center justify-center w-8 h-8 rounded-full transition-colors">
                                                    {{ $loop->iteration }}
                                                </span>
                                                <span class="text-zinc-700 dark:text-zinc-300">{{ $answer->name }}</span>
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
                        <button x-bind:disabled="isLoading" x-on:click="isLoading = true;
                                                                              $nextTick(() => {
                                                                                  $wire.submitQuiz().then(() => {
                                                                                      isLoading = false;
                                                                                  }).catch(() => {
                                                                                      isLoading = false;
                                                                                  });
                                                                              });"
                            class="px-8 py-3 rounded-lg bg-blue-500/90 hover:bg-blue-600/90 dark:bg-blue-600/80 dark:hover:bg-blue-700/80 text-white
                                                                           shadow-md hover:shadow-blue-500/10 dark:hover:shadow-blue-500/5 transition-all duration-200
                                                                           font-medium disabled:opacity-50 disabled:cursor-not-allowed">
                            <template x-if="isLoading">
                                <svg class="animate-spin h-5 w-5 mr-2 text-white inline-block"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
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
        <div class="bg-white/80 dark:bg-zinc-900/90 backdrop-blur-sm rounded-xl shadow-lg p-6 text-center">
            <h2 class="text-2xl font-bold mb-4 text-zinc-800 dark:text-zinc-100">Quiz Completed!</h2>
            <p class="text-lg text-zinc-700 dark:text-zinc-300">Your score: {{ $score }} out of
                {{ $quiz->questions->count() }}
            </p>
            <p class="text-zinc-500 dark:text-zinc-400 mt-2">
                Correct: {{ $score }} | Incorrect: {{ $quiz->questions->count() - $score }}
            </p>

            <!-- Leaderboard Section -->
            <div class="mt-8 border-t border-zinc-200 dark:border-zinc-800 pt-6">
                <h3 class="text-xl font-semibold mb-4 text-zinc-800 dark:text-zinc-100">Leaderboard</h3>
                <p class="text-sm text-zinc-500 dark:text-zinc-400 mb-4">Total Participants: {{ $totalParticipants }}</p>

                @if($leaderboard->count() > 0)
                    <div class="max-w-md mx-auto">
                        <div class="space-y-2">
                            @foreach($leaderboard as $entry)
                                <div
                                    class="flex items-center justify-between p-3 {{ $entry->user_id === auth()->id() ? 'bg-blue-50 dark:bg-blue-900/20' : 'bg-zinc-50 dark:bg-zinc-800/50' }} rounded-lg">
                                    <div class="flex items-center space-x-3">
                                        <span
                                            class="font-medium {{ $loop->iteration <= 3 ? 'text-blue-600 dark:text-blue-400' : 'text-zinc-600 dark:text-zinc-400' }}">
                                            #{{ $loop->iteration }}
                                        </span>
                                        <span class="text-zinc-700 dark:text-zinc-300">{{ $entry->user->name }}</span>
                                    </div>
                                    <span class="font-semibold text-zinc-800 dark:text-zinc-200">{{ $entry->total_score }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <p class="text-zinc-500 dark:text-zinc-400">No entries yet.</p>
                @endif
            </div>

            <a wire:navigate href="/quizzes"
                class="mt-6 inline-block px-6 py-2 rounded-lg bg-blue-500/90 hover:bg-blue-600/90 dark:bg-blue-600/80 dark:hover:bg-blue-700/80 text-white font-medium shadow-md transition-all duration-200">
                &larr; Back to Quizzes
            </a>
        </div>
    @endif
</div>
