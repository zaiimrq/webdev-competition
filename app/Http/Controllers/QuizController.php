<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('quiz', [
            'quizzes' => \App\Models\Quiz::all(),
        ]);
    }
}
