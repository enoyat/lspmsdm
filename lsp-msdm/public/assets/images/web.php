<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/tentang-lsp', function () {
    return view('tentanglsp');
});
Route::get('/legalitas', function () {
    return view('legalitas');
});

Route::get('/skema-sertifikasi', [App\Http\Controllers\HomeController::class, 'skemasertifikasi'])->name('skema.index');
Route::get('/skema-sertifikasi/{id}', [App\Http\Controllers\HomeController::class, 'skemadetail'])->name('skema.detail');
