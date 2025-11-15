<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Kewpie 10ml',
            'description' => 'Dressing Salad dari wijen',
            'price' => 5000,
            'stock' => 10,
        ]);

        Product::create([
            'name' => 'Masako 500gram',
            'description' => 'Penyedap rasa ayam membantu menggurihkan masakan.',
            'price' => 15000,
            'stock' => 30,
        ]);

        Product::create([
            'name' => 'Minyak Goreng Sunco',
            'description' => 'Minyak Kelapa Sawit paling jernih dan bisa diminum.',
            'price' => 40000,
            'stock' => 12,
        ]);

        Product::create([
            'name' => 'Nutrijel Pudiing 150 Gram',
            'description' => 'Puding Rasa instan, dan cepat.',
            'price' => 17500,
            'stock' => 8,
        ]);

        Product::create([
            'name' => 'Spreedy',
            'description' => 'Keju Oles untuk masakan.',
            'price' => 15000,
            'stock' => 40,
        ]);
    }
}
