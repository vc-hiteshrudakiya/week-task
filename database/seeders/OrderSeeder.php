<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Order;
use App\Models\Buyer;
use App\Models\Item;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $buyer = Buyer::first();
        $item1 = Item::first();
        $item2 = Item::find(2);

        Order::insert([
            ['buyer_id' => $buyer->id, 'item_id' => $item1->id],
            ['buyer_id' => $buyer->id, 'item_id' => $item2->id],
        ]);
    }
}
