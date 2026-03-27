<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Interests;
use App\Models\Languages;
use App\Models\Profile;
use App\Models\TechnicalSkills;
use App\Models\WorkExperience;
use Illuminate\View\View;

class PortfolioController extends Controller
{

    public function index(): View
    {
        return view(view: "portfolio.index",
            data: ['profile' => Profile::all(),
            'experience' => WorkExperience::all(),
            'education' => Education::all(),
            'interests' => Interests::all(),
            'languages' => Languages::all(),
            'skills' => TechnicalSkills::all()
        ]);
    }

}
