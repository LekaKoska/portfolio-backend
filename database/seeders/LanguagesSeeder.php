<?php

namespace Database\Seeders;

use App\Models\Languages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Lang;

class LanguagesSeeder extends Seeder
{
    public function run(): void
    {
        $languages = ["Serbian", "English"];

        foreach ($languages as $language)
        {
            Languages::create([
                "name" => $language
            ]);
        }

    }
}
