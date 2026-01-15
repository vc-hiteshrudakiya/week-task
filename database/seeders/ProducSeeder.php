<?php

namespace Database\Seeders;
use App\Models\Produc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProducSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produc::create([
            'name' => 'Laptop',
        ]);

        Produc::create([
            'name' => 'Mobile',
        ]);

        Produc::create([
            'name' => 'Headphones',
        ]);
    }
}
