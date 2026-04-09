<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/listgallery', [App\Http\Controllers\HomeController::class, 'listgallery'])->name('listgallery');
Route::get('/tentang-lsp', function () {
    return view('tentanglsp');
});
Route::get('/legalitas', function () {
    return view('legalitas');
});

Route::get('/skema-sertifikasi', [App\Http\Controllers\HomeController::class, 'skemasertifikasi'])->name('skema.index');
Route::get('/skema-sertifikasi/{id}', [App\Http\Controllers\HomeController::class, 'skemadetail'])->name('skema.detail');

Route::get('/skema-sertifikasi-online', [App\Http\Controllers\HomeController::class, 'skemasertifikasionline'])->name('skema.indexonline');
Route::get('/skema-sertifikasi-online/{id}', [App\Http\Controllers\HomeController::class, 'skemadetailonline'])->name('skema.detailonline');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class);
});

require __DIR__ . '/auth.php';
