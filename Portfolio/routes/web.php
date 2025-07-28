<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Pages routes



Route::get('/', [SiteController::class, 'homePage'])->name('home');
Route::get('/about', [SiteController::class, 'aboutPage'])->name('about');
Route::get('/services', [SiteController::class, 'servicesPage'])->name('services');
Route::get('/portfolio', [SiteController::class, 'portfolioPage'])->name('portfolio');
Route::get('/contact', [SiteController::class, 'contactPage'])->name('contact');
