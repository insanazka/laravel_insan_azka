<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RumahSakitController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/rumah-sakit', [RumahSakitController::class, 'index'])->name('rumah-sakit.index');
});
Route::resource('rumah-sakit', RumahSakitController::class);
Route::resource('pasien', PasienController::class);


