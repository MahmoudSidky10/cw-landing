<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/contact', [HomeController::class, 'contact'])->name("contact");
Route::get('/about', [HomeController::class, 'about'])->name("about");
Route::get('/service', [HomeController::class, 'service'])->name("service");
Route::get('/blog', [HomeController::class, 'blog'])->name("blog");
Route::get('/faq', [HomeController::class, 'faq'])->name("faq");
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name("privacy-policy");
