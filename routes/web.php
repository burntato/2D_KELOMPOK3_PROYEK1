<?php

use App\Http\Controllers\BalitaController;
use App\Http\Controllers\DewasaController;
use App\Http\Controllers\LansiaController;
use App\Http\Controllers\RemajaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('lansia', LansiaController::class);
    Route::resource('balita', BalitaController::class);
    Route::resource('remaja', RemajaController::class);
    Route::resource('dewasa', DewasaController::class);
});
