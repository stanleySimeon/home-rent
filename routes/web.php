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
Route::get('/receipt', [App\Http\Controllers\ReceiptController::class, 'index'])->name('receipt');
Route::get('/utility_bill', [App\Http\Controllers\UtilityBillController::class, 'index'])->name('utility_bill');
Route::get('/tenant', [App\Http\Controllers\TenantController::class, 'index'])->name('tenant');
Route::get('/rental_unit', [App\Http\Controllers\RentalUnitController::class, 'index'])->name('rental_unit');

