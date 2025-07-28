<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPages\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('Home');
