<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ItemCategory;

use Illuminate\Support\Facades\Hash;
class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItemCategory::insert([
            ['name' => 'Mobile'],
            ['name' => 'TV'],
            ['name' => 'Accessory'],
        ]);

    }
}
