<?php

namespace Database\Seeders;

use App\Models\WorkExperience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                "company_name" => "Nikolić Technology",
                "job_title" => "Laravel Developer",
                "job_desc" => "During my internship, I developed robust backend solutions, including database schema design, authentication modules, and data modeling.
            I worked closely with the development team via Git, contributing to a shared codebase and participating in collaborative technical workflows.",
                "project_link" => "ispodhaube.com",
                "start_date" => "2025-09-01",
                "end_date" => "2025-12-31"
            ],
            [
                "company_name" => "Developer",
                "job_title" => "Personal project",
                "project_link" => "https://github.com/LekaKoska/chat-app",
                "job_desc" => "Built a social media platform, using WebSockets for live chatting, MVC for posts, comments and friendships. Implementing Queue and Jobs, Google auth and mail verification.",
                "start_date" => "2025-10-01",
                "end_date" => "2025-12-20"
            ],
            [
                "company_name" => "Developer",
                "job_title" => "Personal project",
                "project_link" => "https://github.com/LekaKoska/ShipmentsTrack",
                "job_desc" => "Develop personal project for Shipments warrant. Using Livewire for UI, user can create new warrant, generate as PDF and save it.",
                "start_date" => "2025-11-01",
                "end_date" => "2026-01-10"
        ],

        ];
        foreach ($data as $job)
        {
            WorkExperience::create($job);
        }
    }
}
