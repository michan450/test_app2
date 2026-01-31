<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        Product::create([
            'name' => 'バナナ',
            'price' => 600,
            'image' => 'banana.png',
        ]);

        Product::create([
            'name' => 'ブドウ',
            'price' => 1100,
            'image' => 'grapes.png',
        ]);
        Product::create([
            'name' => 'キウイ',
            'price' => 800,
            'image' => 'kiwi.png',
        ]);

        Product::create([
            'name' => 'メロン',
            'price' => 900,
            'image' => 'melon.png',
        ]);
        Product::create([
            'name' => 'シャインマスカット',
            'price' => 1400,
            'image' => 'muscat.png',
        ]);

        Product::create([
            'name' => 'オレンジ',
            'price' => 850,
            'image' => 'orange.png',
        ]);
        Product::create([
            'name' => 'ピーチ',
            'price' => 1000,
            'image' => 'peach.png',
        ]);

        Product::create([
            'name' => 'パイナップル',
            'price' => 800,
            'image' => 'pineapple.png',
        ]);
        Product::create([
            'name' => 'ストロベリー',
            'price' => 1200,
            'image' => 'strawberry.png',
        ]);

        Product::create([
            'name' => 'スイカ',
            'price' => 700,
            'image' => 'watermelon.png',
        ]);
    }
}
