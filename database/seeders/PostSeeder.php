<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $categories = Category::all();

        foreach ($categories as $category) {
            Post::factory()
                ->count(10)
                ->create([
                    'category_id' => $category->id
                ]);
        }
    }
}
