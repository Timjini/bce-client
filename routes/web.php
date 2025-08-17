<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServicePagesController;
use App\Models\Section;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePageController::class, 'index']);

Route::prefix('services')->controller(ServicePagesController::class)->group(function () {
    Route::get('/', 'index')->name('services.index');
    Route::get('/maintenance', 'maintenance')->name('services.maintenance');
    Route::get('/installation', 'installation')->name('services.installation');
});

Route::get('/{sectionSlug}', function ($sectionSlug) {
    $section = Section::where('slug', $sectionSlug)->firstOrFail();
    return view('pages.service', ['page' => $section->page]);
})->name('section.page');

Route::get('{sectionSlug}/{categorySlug}/{pageSlug}', [PageController::class, 'show'])
    ->name('pages.show');