<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\LoginController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pesan/{id}', [App\Http\Controllers\PesanController::class, 'index'])->name('pesan');
Route::post('pesan/{id}', [App\Http\Controllers\PesanController::class, 'pesan']);
Route::get('checkout', [App\Http\Controllers\PesanController::class, 'checkout']);
Route::delete('checkout/{id}', [App\Http\Controllers\PesanController::class, 'delete']);
Route::get('konfirmasi-checkout', [App\Http\Controllers\PesanController::class, 'konfirmasi']);
Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index']);
Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update']);
Route::get('history', [App\Http\Controllers\HistoryController::class, 'index']);
Route::get('history/{id}', [App\Http\Controllers\HistoryController::class, 'detail']);