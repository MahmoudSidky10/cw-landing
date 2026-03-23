<?php

use App\Http\Controllers\Admin\Dashboard\IndexController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteSettingController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\SocialMediaController;
use Illuminate\Support\Facades\Route;

Route::get('/dash', [IndexController::class, 'index']);
Route::get('/dash/recent-blogs', [IndexController::class, 'recentBlogs']);
Route::get('/edit', [IndexController::class, 'edit']);
Route::put('/updateAdmin', [IndexController::class, 'update']);

Route::get('/settings', [IndexController::class, 'settings']);
Route::put('/updateSettings', [IndexController::class, 'updateSettings']);

Route::resource('faqs', FaqController::class);
Route::resource('contacts', ContactController::class)->only(['index', 'show', 'destroy']);
Route::get('/site-settings', [SiteSettingController::class, 'index']);
Route::put('/site-settings', [SiteSettingController::class, 'update'])->name('admin.site-settings.update');
Route::resource('blogs', BlogController::class);
Route::resource('blog-categories', BlogCategoryController::class);
Route::resource('social-media', SocialMediaController::class);
