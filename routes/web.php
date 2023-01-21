<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// App\Http\Controllers\ProfileControler@index

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', 'App\Http\Controllers\UserController@dashboard')->middleware('auth');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// Route::get('/profile', function () {
//     return view('profile');
// });

