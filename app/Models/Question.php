<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    /** @use HasFactory<\Database\Factories\QuestionFactory> */
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'name',
    ];

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function getCorrectAnswer()
    {
        return $this->answers()
            ->where('is_correct', true)
            ->first();
    }

    public function getCorrectAnswerId(): int
    {
        return $this->getCorrectAnswer()->id;
    }
}
