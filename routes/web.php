<?php

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

Route::get('/masuk', [App\Http\Controllers\surat\SuratController::class, 'masuk']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\surat\SuratController::class, 'dashboard']);
Route::get('/suratmasuk', [App\Http\Controllers\surat\SuratController::class, 'suratmasuk']);
Route::get('/suratkeluar', [App\Http\Controllers\surat\SuratController::class, 'suratkeluar']);
Route::get('/laporan', [App\Http\Controllers\surat\SuratController::class, 'laporan']);
Route::get('/manajemenakun', [App\Http\Controllers\surat\SuratController::class, 'manajemenakun']);
Route::get('/crtmasuk', [App\Http\Controllers\surat\SuratController::class, 'crtmasuk']);
Route::get('/crtkeluar', [App\Http\Controllers\surat\SuratController::class, 'crtkeluar']);