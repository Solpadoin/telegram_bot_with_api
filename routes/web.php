<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Telegram\DispatchController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notify', [DispatchController::class, 'notify']);
Route::get('/home', [Controller::class, 'index'])->name('home');
