<?php

use App\Http\Controllers\PortfolioController;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, "index"]);

Route::get('/download-cv', function () {
    $profile = Profile::first();
    $path = public_path('cv/' . $profile->cv_pdf);

    return response()->download($path, 'Alek-Koska-CV.pdf', [
        'Content-Disposition' => 'attachment; filename="Alek-Koska-CV.pdf"'
    ]);
})->name('cv.download');

Route::post("/chat", [PortfolioController::class, "chat"])->name("ai.chat");

Route::post("/send-form", [PortfolioController::class, "contact"])->name("contact.form");

Route::get('/health', function () {
    try {
        DB::connection()->getPdo();
        return response()->json(['status' => 'ok', 'db' => 'connected']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
    }
});
