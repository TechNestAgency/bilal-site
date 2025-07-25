<?php

use Illuminate\Support\Facades\Route;


// Authentication routes
Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

// Public routes
Route::get('/',[\App\Http\Controllers\WebsiteController::class,'index'])->name('website.index'); // Arabic default
Route::get('/en',[\App\Http\Controllers\WebsiteController::class,'indexEn'])->name('website.index.en'); // English version
Route::get('/enrolls',[\App\Http\Controllers\WebsiteController::class,'enrolls'])->name('enrolls');
Route::post('/enrolls',[\App\Http\Controllers\WebsiteController::class,'store'])->name('enrolls.store');

// Protected routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[\App\Http\Controllers\WebsiteController::class,'dashboard'])->name('website.dashboard');
});
