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
        return view('quizzes', [
            'quizzes' => \App\Models\Quiz::all(),
        ]);
    }
}
