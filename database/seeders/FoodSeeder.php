<?php

namespace Database\Seeders;

use App\Enums\Foods\Category;
use App\Models\Food;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    public function run(): void
    {
        $foods = [
            // Set Menu Sarapan
            [
                'name' => 'Nasi Goreng dan Telur Mata Sapi',
                'protein' => 22.3,
                'fat' => 18.5,
                'carbohydrate' => 80.9,
                'calories' => 950,
                'category' => Category::SARAPAN
            ],
            [
                'name' => 'Bubur Ayam, Teh Manis dan Telur Rebus',
                'protein' => 12.0,
                'fat' => 15.5,
                'carbohydrate' => 55.3,
                'calories' => 420,
                'category' => Category::SARAPAN
            ],
            [
                'name' => 'Sandwich Roti dan Susu',
                'protein' => 17.3,
                'fat' => 19.5,
                'carbohydrate' => 48.5,
                'calories' => 600,
                'category' => Category::SARAPAN
            ],

            // Set Menu Camilan
            [
                'name' => 'Pisang, Ubi dan Kacang Rebus',
                'protein' => 13.2,
                'fat' => 6.5,
                'carbohydrate' => 53.0,
                'calories' => 300,
                'category' => Category::CAMILAN
            ],
            [
                'name' => 'Roti Gandum, Telur dan Alpukat',
                'protein' => 10.5,
                'fat' => 8.0,
                'carbohydrate' => 38.0,
                'calories' => 280,
                'category' => Category::CAMILAN
            ],
            [
                'name' => 'Martabak Mini',
                'protein' => 12.8,
                'fat' => 13.2,
                'carbohydrate' => 45.0,
                'calories' => 350,
                'category' => Category::CAMILAN
            ],

            // Set Menu Makan Siang
            [
                'name' => 'Nasi, Sop Buntut',
                'protein' => 32.5,
                'fat' => 14.7,
                'carbohydrate' => 78.0,
                'calories' => 550,
                'category' => Category::MAKAN_SIANG
            ],
            [
                'name' => 'Nasi, Rendang Sapi dan Sayur',
                'protein' => 27.8,
                'fat' => 11.0,
                'carbohydrate' => 72.5,
                'calories' => 500,
                'category' => Category::MAKAN_SIANG
            ],
            [
                'name' => 'Siomay',
                'protein' => 14.1,
                'fat' => 8.5,
                'carbohydrate' => 55.8,
                'calories' => 350,
                'category' => Category::MAKAN_SIANG
            ],

            // Set Menu Makan Malam
            [
                'name' => 'Ayam Bakar dan Nasi Putih',
                'protein' => 19.2,
                'fat' => 12.3,
                'carbohydrate' => 72.2,
                'calories' => 500,
                'category' => Category::MAKAN_MALAM
            ],
            [
                'name' => 'Nasi dan Soto Betawi',
                'protein' => 25.0,
                'fat' => 34.0,
                'carbohydrate' => 98.0,
                'calories' => 800,
                'category' => Category::MAKAN_MALAM
            ],
            [
                'name' => 'Sate Ayam, Lontong',
                'protein' => 25.2,
                'fat' => 18.0,
                'carbohydrate' => 60.3,
                'calories' => 500,
                'category' => Category::MAKAN_MALAM
            ],
        ];

        Food::fillAndInsert($foods);
    }
}
