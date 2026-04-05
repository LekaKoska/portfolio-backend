<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    public function run(): void
    {
        Education::truncate();

        Education::create([
            "school_name" => "Self-Taught Web Developer",
            "course" => "itskola.net",
            "description" => "I utilized this platform to accelerate my professional growth under the dedicated guidance of an experienced mentor"
        ]);
    }
}
