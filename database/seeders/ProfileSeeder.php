<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::truncate();

        Profile::create([
            "name" => "Alek Koska",
            "title" => "Laravel Developer",
            "city" => "Novi Sad",
            "about_me" => "I am a full-stack developer with a stronger focus on backend development.
             I primarily work with Laravel, where I build REST APIs, write tests with PHPUnit, automate processes, use Swagger annotations, Postman, and design databases.
             I pay close attention to clean code and design patterns. On the frontend, I use JavaScript to create dynamic user interfaces.
             My goal is to write clean and readable code that everyone can understand.",
            "profile_img" => "zl.jpg",
            "cv_pdf" => "alek-koska-cv.pdf",
            "github_link" => "https://github.com/LekaKoska",
            "linkedin_link" => "https://linkedin.com/in/koskaalek/",
            "gmail" => "koska.alek24@gmail.com",

        ]);
    }
}
