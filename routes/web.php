<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/operasional/dashboard', [DashboardController::class, 'operasionalDashboard'])
    ->name('operasional.dashboard');

Route::get('/operasional/validasi', [DashboardController::class, 'operasionalValidasi'])
    ->name('operasional.validasi');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
