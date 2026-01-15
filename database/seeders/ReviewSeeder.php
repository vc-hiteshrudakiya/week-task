<?php

namespace Database\Seeders;
use App\Models\Review;
use App\Models\Produc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Produc::all();

        foreach ($products as $product) {
            Review::create([
                'product_id' => $product->id,
                'review' => 'Good product',
            ]);

            Review::create([
                'product_id' => $product->id,
                'review' => 'Value for money',
            ]);
        }
    }
}
