<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    /** @use HasFactory<\Database\Factories\UserAnswerFactory> */
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'user_id',
        'question_id',
        'answer_id',
        'is_correct',
        'score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}
