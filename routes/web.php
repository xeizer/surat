<?php

use App\Http\Controllers\surat\SuratController;
use App\Http\Controllers\SuratmasukController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect('login');
});

Auth::routes();

Route::get('/masuk', [App\Http\Controllers\surat\SuratController::class, 'masuk']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\surat\SuratController::class, 'dashboard']);

Route::get('/suratkeluar', [App\Http\Controllers\surat\SuratController::class, 'suratkeluar']);
Route::get('/crtkeluar', [App\Http\Controllers\surat\SuratController::class, 'crtkeluar']);
Route::get('/manajemenakun', [App\Http\Controllers\surat\SuratController::class, 'manajemenakun']);

//Surat Masuk
Route::get('/suratmasuk', [SuratmasukController::class, 'suratmasuk']);
Route::get('/crtmasuk', [SuratmasukController::class, 'crtmasuk']);
Route::post('/simpansuratmasuk', [App\Http\Controllers\SuratmasukController::class, 'store']);
Route::get('/suratmasuk', [SuratmasukController::class, 'total']);
<<<<<<< HEAD
Route::get('/editsrtmasuk/{id}', [SuratmasukController::class, 'edit']);
Route::post('/suratmasuk/edit/{id}', [SuratmasukController::class, 'update']);
=======

Route::get('/laporan',[App\Http\Controllers\LaporanController::class, 'laporan']);
Route::get('/cetak',[App\Http\Controllers\LaporanController::class, 'cetak']);
>>>>>>> 6d7c7593d9b654a21f251b27f67c6117595d3358

Route::get('/timkami', [App\Http\Controllers\TeamController::class, 'index']);
