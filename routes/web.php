<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\QrController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TuoiController;

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
})->name('home');

Route::get('/tinh-tuoi', [TuoiController::class, 'index'])->name('tinh.tuoi');
Route::post('/tinh-tuoi', [TuoiController::class, 'calculateAge']);


Route::get('/qrcode', [QrController::class, 'index'])->name('tao.qr');

Route::post('/qrcode', [QrController::class, 'show']);
