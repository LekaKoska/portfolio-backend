<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call([
            EducationSeeder::class,
            InterestsSeeder::class,
            LanguagesSeeder::class,
            ProfileSeeder::class,
            TechnicalSkillsSeeder::class,
            WorkExperienceSeeder::class
        ]);
    }
}
