<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// 🔹 You MUST import your model here:
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        Course::factory()->count(5)->create();
    }
}
