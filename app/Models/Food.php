<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'name',
        'protein',
        'carbohydrates',
        'fat',
        'calories',
        'category'
    ];

    protected function casts(): array
    {
        return [
            'category' => \App\Enums\Foods\Category::class
        ];
    }
}
