<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Interests;
use App\Models\Languages;
use App\Models\Profile;
use App\Models\TechnicalSkills;
use App\Models\WorkExperience;
use Illuminate\Http\JsonResponse;

class PortfolioController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'profile' => Profile::all(),
            'experience' => WorkExperience::all(),
            'education' => Education::all(),
            'interests' => Interests::all(),
            'languages' => Languages::all(),
            'skills' => TechnicalSkills::all()
        ]);
    }
}
