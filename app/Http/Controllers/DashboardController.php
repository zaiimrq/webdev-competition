<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'completedQuizzes' => 8,
            'totalQuizzes' => 10,
            'averageScore' => 85.5,
            'remainingQuizzes' => 2,
            'passedQuizzes' => 7,
            'failedQuizzes' => 1,
            'quizDates' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
            'quizScores' => [75, 82, 90, 85, 88, 95, 78, 92],
        ]);
    }
}
