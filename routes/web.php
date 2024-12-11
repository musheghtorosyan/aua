<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/test', [MainController::class, 'test'])->name('test');
Route::post('/subscribe', [MainController::class, 'subscribe']);
