<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\FrontPages\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('Home');

Route::group(['prefix' => 'admin'], function(){
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});
