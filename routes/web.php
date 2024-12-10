<?php

use App\Http\Controllers\LandingPage\BeritaController;
use App\Http\Controllers\LandingPage\LandingPageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('landingpage');
// });

Route::get('/', [LandingPageController::class, 'index']);

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');
