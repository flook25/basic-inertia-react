<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'welcome'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');