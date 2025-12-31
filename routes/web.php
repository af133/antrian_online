<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutentifikasiController;
use App\Http\Controllers\Admin;
Route::get('/',[AutentifikasiController::class, 'index'])->name('login.index');
Route::post('/login',[AutentifikasiController::class, 'authenticate'])->name('login.authenticate');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [Admin::class, 'index'])->name('dashboard.index');
});
