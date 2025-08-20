<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicePagesController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

Route::get('/pages/{filename}', function ($filename): StreamedResponse {
    $path = "pages/{$filename}";

    if (!Storage::disk('s3')->exists($path)) {
        abort(404);
    }

    return Storage::disk('s3')->response($path);
})->name('pages.image');

Route::get('/', [HomePageController::class, 'index']);

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/search', [App\Http\Controllers\PageController::class, 'search'])->name('pages.search');



Route::prefix('services')->controller(ServicePagesController::class)->group(function () {
    Route::get('/', 'index')->name('services.index');
    Route::get('/maintenance', 'maintenance')->name('services.maintenance');
    Route::get('/installation', 'installation')->name('services.installation');
});

// Route::get('/{sectionSlug}', function ($sectionSlug) {
//     $section = Section::where('slug', $sectionSlug)->firstOrFail();
//     return view('pages.service', ['page' => $section->page]);
// })->name('section.page');

Route::get('{sectionSlug}/{categorySlug}', [PageController::class, 'showCategory'])
    ->name('pages.category');

Route::get('{sectionSlug}/{categorySlug}/{pageSlug}', [PageController::class, 'show'])
    ->name('pages.show');
    
Route::get('{sectionSlug}', [PageController::class, 'showSection'])
    ->name('pages.section');