<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'sword',
                'description' => 'A sword is an edged, bladed weapon intended for manual cutting or thrusting.',
                'price' => '50',
                'stock' => '10',
                'category' => 'weapon',
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
