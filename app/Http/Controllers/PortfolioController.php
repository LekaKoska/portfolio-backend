<?php

namespace App\Http\Controllers;

use App\Ai\Agents\ChatAssistant;
use App\Http\Requests\ContactForm;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Interests;
use App\Models\Languages;
use App\Models\Profile;
use App\Models\TechnicalSkills;
use App\Models\WorkExperience;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{

    public function index(): View
    {
        return view(view: "portfolio.index",
            data: ['profile' => Profile::first(),
            'experience' => WorkExperience::all(),
            'education' => Education::all(),
            'interests' => Interests::all(),
            'languages' => Languages::all(),
            'skills' => TechnicalSkills::all()
        ]);
    }

    public function chat(Request $request): JsonResponse
    {
        $response = (new ChatAssistant())->prompt($request->input("chat-message"));
        return response()->json(['reply' => $response]);
    }

    public function contact(ContactForm $request): RedirectResponse
    {
       Contact::create($request->validated());
        return redirect()->to(path: '/#contact-form')->with("success", "Your message has been sent successfully!");
    }

}
