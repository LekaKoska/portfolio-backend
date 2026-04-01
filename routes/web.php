<?php

use App\Http\Controllers\PortfolioController;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, "index"]);

Route::get('/download-cv', function () {
    $profile = Profile::first();
    $path = storage_path('app/public/cv/' . $profile->cv_pdf);

    return response()->download($path);
})->name('cv.download');

Route::get("/chat", [PortfolioController::class, "chat"])->name("ai.chat");


Route::get('/test-agent', function () {
    $agent = new \App\Ai\Agents\ChatAssistant();

    $response = $agent->prompt('How many years Alek learn programming');
    return $response->text;
});
