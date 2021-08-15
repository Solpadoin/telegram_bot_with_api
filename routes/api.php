<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Telegram\DispatchController;
use App\Http\Controllers\Api\AuthorizeController;
use App\Http\Controllers\Api\LogoutController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/notify', [DispatchController::class, 'notify'])->name('notify');
Route::get('/authorize', [AuthorizeController::class, 'authorizeUser'])->name('authorize');
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');