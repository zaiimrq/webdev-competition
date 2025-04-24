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
                'category' => Category::SARAPAN,
                'image_url' => 'https://i.pinimg.com/736x/c4/e2/77/c4e277695c70c3de673062e9b800a837.jpg',
            ],
            [
                'name' => 'Bubur Ayam, Teh Manis dan Telur Rebus',
                'protein' => 12.0,
                'fat' => 15.5,
                'carbohydrate' => 55.3,
                'calories' => 420,
                'category' => Category::SARAPAN,
                'image_url' => 'https://i.pinimg.com/736x/f7/71/c2/f771c22052372f6166484d2ed79dd6f8.jpg',

            ],
            [
                'name' => 'Sandwich Roti dan Susu',
                'protein' => 17.3,
                'fat' => 19.5,
                'carbohydrate' => 48.5,
                'calories' => 600,
                'category' => Category::SARAPAN,
                'image_url' => 'https://i.pinimg.com/736x/2f/93/85/2f9385b711c5a30cd4fe606d7a0d09e0.jpg',
            ],

            // Set Menu Camilan
            [
                'name' => 'Pisang, Ubi dan Kacang Rebus',
                'protein' => 13.2,
                'fat' => 6.5,
                'carbohydrate' => 53.0,
                'calories' => 300,
                'category' => Category::CAMILAN,
                'image_url' => 'https://i.pinimg.com/736x/6a/e1/ae/6ae1ae321b9aa043aa28d7985b2173f7.jpg',
            ],
            [
                'name' => 'Roti Gandum, Telur dan Alpukat',
                'protein' => 10.5,
                'fat' => 8.0,
                'carbohydrate' => 38.0,
                'calories' => 280,
                'category' => Category::CAMILAN,
                'image_url' => 'https://i.pinimg.com/736x/65/84/ef/6584efcc07dacd2b2a2840123b3fadac.jpg',

            ],
            [
                'name' => 'Martabak Mini',
                'protein' => 12.8,
                'fat' => 13.2,
                'carbohydrate' => 45.0,
                'calories' => 350,
                'category' => Category::CAMILAN,
                'image_url' => 'https://i.pinimg.com/736x/7b/74/c8/7b74c873818b4a270d0cff66c7e79efd.jpg',
            ],

            // Set Menu Makan Siang
            [
                'name' => 'Nasi dan Sop Buntut',
                'protein' => 32.5,
                'fat' => 14.7,
                'carbohydrate' => 78.0,
                'calories' => 550,
                'category' => Category::MAKAN_SIANG,
                'image_url' => 'https://i.pinimg.com/736x/cb/e7/47/cbe747ab93036eab0b36c2e4a22818d3.jpg',
            ],
            [
                'name' => 'Nasi, Rendang Sapi dan Tumis Sayur',
                'protein' => 27.8,
                'fat' => 11.0,
                'carbohydrate' => 72.5,
                'calories' => 500,
                'category' => Category::MAKAN_SIANG,
                'image_url' => 'https://i.pinimg.com/736x/ca/60/05/ca600539b94a1c4948e984bc7cdb9694.jpg',
            ],
            [
                'name' => 'Siomay dan Teh Manis',
                'protein' => 14.1,
                'fat' => 8.5,
                'carbohydrate' => 55.8,
                'calories' => 350,
                'category' => Category::MAKAN_SIANG,
                'image_url' => 'https://i.pinimg.com/736x/6a/e1/ae/6ae1ae321b9aa043aa28d7985b2173f7.jpg',
            ],

            // Set Menu Makan Malam
            [
                'name' => 'Ayam Bakar dan Nasi Putih',
                'protein' => 19.2,
                'fat' => 12.3,
                'carbohydrate' => 72.2,
                'calories' => 500,
                'category' => Category::MAKAN_MALAM,
                'image_url' => 'https://i.pinimg.com/736x/11/65/bf/1165bf2c308c1bba5ef9eaf3f306de6e.jpg',

            ],
            [
                'name' => 'Nasi dan Soto Betawi',
                'protein' => 25.0,
                'fat' => 34.0,
                'carbohydrate' => 98.0,
                'calories' => 800,
                'category' => Category::MAKAN_MALAM,
                'image_url' => 'https://i.pinimg.com/736x/0a/2d/11/0a2d111aa30a41cb089d497263e60a01.jpg',
            ],
            [
                'name' => 'Sate Ayam dan Lontong',
                'protein' => 25.2,
                'fat' => 18.0,
                'carbohydrate' => 60.3,
                'calories' => 500,
                'category' => Category::MAKAN_MALAM,
                'image_url' => 'https://i.pinimg.com/736x/c7/d9/50/c7d95079b6b25bd9caf164133289afad.jpg',
            ],
        ];

        Food::fillAndInsert($foods);
    }
}
