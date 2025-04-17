<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quiz extends Model
{
    /** @use HasFactory<\Database\Factories\QuizFactory> */
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'description',
    ];

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
