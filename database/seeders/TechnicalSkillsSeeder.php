<?php

namespace Database\Seeders;

use App\Models\TechnicalSkills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnicalSkillsSeeder extends Seeder
{

    public function run(): void
    {
        $skills = ["PHP/Laravel", "JavaScript", "MySQL", "MongoDB", "Docker"];
        foreach ($skills as $skill)
        {
            TechnicalSkills::create(
                [
                    "name" => $skill
            ]);
        }

    }
}
