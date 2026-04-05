<?php

namespace Database\Seeders;

use App\Models\Interests;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InterestsSeeder extends Seeder
{
    public function run(): void
    {
        Interests::truncate();

        $interests = [
            "Backend Architecture",
            "Design Patterns",
            "API Development",
            "DevOps",
            "Clean Code Principles",
            "AI Tools",
            "Database Optimization"
        ];

        foreach ($interests as $interest) {
            Interests::create(['name' => $interest]);
        }


    }
}

