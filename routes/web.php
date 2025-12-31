<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutentifikasiController;
use App\Http\Middleware\Autentifikasi;
use App\Http\Controllers\QueueController;
Route::get('/',[AutentifikasiController::class, 'index'])->name('login.index');
Route::post('/login',[AutentifikasiController::class, 'login'])->name('login.authenticate');

Route::middleware([Autentifikasi::class])->group(function () {
    Route::get('/dashboard', [QueueController::class, 'index'])->name('dashboard.index');
    Route::post('/logout', [AutentifikasiController::class, 'logout'])->name('logout');
});
