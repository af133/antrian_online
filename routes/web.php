<?php

use App\Http\Middleware\RedirectIfAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutentifikasiController;
use App\Http\Middleware\Autentifikasi;
use App\Http\Controllers\QueueController;
Route::middleware(RedirectIfAuth::class)->group(function () {
    Route::get('/',[AutentifikasiController::class, 'index'])->name('login.index');
    Route::post('/login',[AutentifikasiController::class, 'login'])->name('login.authenticate');
});

Route::middleware([Autentifikasi::class])->group(function () {
    Route::get('/queue', [QueueController::class, 'index'])->name('queue.index');
    Route::post('/logout', [AutentifikasiController::class, 'logout'])->name('logout');
    Route::post('/queue/next', [QueueController::class, 'nextQueue']);
    Route::post('/queue/prev', [QueueController::class, 'prevQueue']);
    Route::post('/queue/create', [QueueController::class, 'createQueue']);
});
Route::get('/queue/json', [QueueController::class, 'getQueues']);
Route::get('/queue/public',[QueueController::class, 'publicQueue']);
