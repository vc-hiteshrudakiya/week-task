<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Item;
use App\Models\ItemCategory;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mobile = ItemCategory::where('name', 'Mobile')->first();
        $tv = ItemCategory::where('name', 'TV')->first();
        $acc = ItemCategory::where('name', 'Accessory')->first();

        Item::insert([
            ['name' => 'iPhone', 'price' => 70000, 'item_category_id' => $mobile->id],
            ['name' => 'Samsung TV', 'price' => 45000, 'item_category_id' => $tv->id],
            ['name' => 'Headphone', 'price' => 2000, 'item_category_id' => $acc->id],
            ['name' => 'Power Bank', 'price' => 1500, 'item_category_id' => $acc->id],
        ]);
    }
}
