<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/test', [MainController::class, 'test'])->name('test');
Route::post('/test', [MainController::class, 'start'])->name('start');
Route::post('/subscribe', [MainController::class, 'subscribe']);
Route::post('/save-result', [MainController::class, 'saveResult']);