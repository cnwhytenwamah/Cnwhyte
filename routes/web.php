<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\FrontPages\HomeController;
use App\Http\Controllers\FrontPages\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('contact', [ContactController::class, 'create'])->name('contact-me');

Route::group(['prefix' => 'admin'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('add-blog', [AdminBlogController::class, 'create'])->name('admin.add-blog');
});
