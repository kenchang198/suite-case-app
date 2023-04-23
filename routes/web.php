<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 予約TOP
Route::get('/reserve', [\App\Http\Controllers\ReserveController::class, 'top']);

// 予約 利用者情報入力
Route::post('/reserve/user', [\App\Http\Controllers\ReserveController::class, 'user']);

// 予約 確認画面
Route::post('/reserve/confirm', [\App\Http\Controllers\ReserveController::class, 'confirm']);

// 予約 完了画面
Route::post('/reserve/complete', [\App\Http\Controllers\ReserveController::class, 'complete']);
