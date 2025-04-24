<?php

namespace App\Models;

use App\Enums\Foods\Category;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'name',
        'protein',
        'carbohydrates',
        'fat',
        'calories',
        'category',
        'image_url',
    ];

    protected function casts(): array
    {
        return [
            'category' => Category::class,
        ];
    }

    #[Scope]
    public function sarapan(Builder $builder): void
    {
        $builder->whereCategory(Category::SARAPAN);
    }

    #[Scope]
    public function makanSiang(Builder $builder): void
    {

        $builder->whereCategory(Category::MAKAN_SIANG);
    }

    #[Scope]
    public function makanMalam(Builder $builder): void
    {
        $builder->whereCategory(Category::MAKAN_MALAM);
    }

    #[Scope]
    public function camilan(Builder $builder): void
    {
        $builder->whereCategory(Category::CAMILAN);
    }
}
