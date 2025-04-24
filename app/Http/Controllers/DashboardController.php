<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\User;
use App\Models\UserAnswer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Get distinct completed quizzes by the user
        $completedQuizIds = UserAnswer::where('user_id', $userId)
            ->select('quiz_id')
            ->distinct()
            ->pluck('quiz_id');

        $totalQuizzes = Quiz::count();
        $completedQuizzes = $completedQuizIds->count();
        $remainingQuizzes = $totalQuizzes - $completedQuizzes;

        // Get upcoming quizzes that don't have questions yet
        $upcomingQuizzes = Quiz::whereDoesntHave('questions')
            ->whereNotIn('id', $completedQuizIds)
            ->latest()
            ->take(2)
            ->get();

        // Calculate average score for completed quizzes
        $averageScore = UserAnswer::where('user_id', $userId)
            ->whereIn('quiz_id', $completedQuizIds)
            ->avg('score') * 100 ?? 0;

        // Count passed and failed quizzes (assuming passing score is 60%)
        $quizScores = UserAnswer::where('user_id', $userId)
            ->whereIn('quiz_id', $completedQuizIds)
            ->groupBy('quiz_id')
            ->select('quiz_id', DB::raw('AVG(score) * 100 as avg_score'))
            ->get();

        $passedQuizzes = $quizScores->where('avg_score', '>=', 60)->count();
        $failedQuizzes = $quizScores->where('avg_score', '<', 60)->count();

        // Get quiz history data for the chart (last 8 attempts)
        $quizHistory = UserAnswer::where('user_id', $userId)
            ->with('quiz')
            ->orderBy('created_at', 'desc')
            ->get()
            ->groupBy('quiz_id')
            ->take(8)
            ->map(function ($attempts) {
                return [
                    'date' => $attempts->first()->created_at->format('M'),
                    'score' => round($attempts->avg('score') * 100, 1),
                ];
            })->values();

        // Get leaderboard data
        $leaderboard = UserAnswer::select('user_id', DB::raw('SUM(score) as total_score'))
            ->with(['user' => function ($query) {
                $query->select('id', 'name', 'email');
            }])
            ->groupBy('user_id')
            ->orderByDesc('total_score')
            ->limit(5)
            ->get();

        // Get recent quizzes
        $recentQuizzes = UserAnswer::where('user_id', $userId)
            ->with('quiz')
            ->select('quiz_id', DB::raw('AVG(score) * 100 as avg_score'), DB::raw('MAX(created_at) as last_attempt'))
            ->groupBy('quiz_id')
            ->orderByDesc('last_attempt')
            ->limit(3)
            ->get();

        return view('dashboard', [
            'completedQuizzes' => $completedQuizzes,
            'totalQuizzes' => $totalQuizzes,
            'averageScore' => round($averageScore, 1),
            'remainingQuizzes' => $remainingQuizzes,
            'upcomingQuizzes' => $upcomingQuizzes,
            'passedQuizzes' => $passedQuizzes,
            'failedQuizzes' => $failedQuizzes,
            'quizDates' => $quizHistory->pluck('date')->toArray(),
            'quizScores' => $quizHistory->pluck('score')->toArray(),
            'leaderboard' => $leaderboard,
            'recentQuizzes' => $recentQuizzes,
        ]);
    }
}
