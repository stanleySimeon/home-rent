<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->name('profile');
Route::post('/profile', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('profile')->middleware('auth');
Route::put('/profile', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('profile')->middleware('auth');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/get_country_code', [App\Http\Controllers\Auth\RegisterController::class, 'getCountryCode']);
Route::get('/house', [App\Http\Controllers\HouseController::class, 'index'])->name('house');

