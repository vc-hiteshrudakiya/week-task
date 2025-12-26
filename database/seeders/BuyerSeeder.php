<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buyer;

use Illuminate\Support\Facades\Hash;
class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buyer::insert([
            ['name' => 'John Doe', 'email' => 'john@example.com', 'password' => Hash::make('123456')],
            ['name' => 'Jane Doe', 'email' => 'jane@example.com', 'password' => Hash::make('123456')],
        ]);
    }
}
