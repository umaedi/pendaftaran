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

Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'index']);
Route::post('/auth/login', [\App\Http\Controllers\Admin\AuthController::class, 'login']);

Route::get('/', function () {
    return view('user.index');
});

Route::controller(\App\Http\Controllers\UserController::class)->group(function () {
    Route::post('/user/store', 'store');
    Route::get('/pendaftaran/sukses', 'success');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::controller(\App\Http\Controllers\Admin\PendaftarController::class)->group(function () {
        Route::get('/pendaftar', 'index')->name('admin.pendaftar');
        Route::get('/pendaftar/terverifikasi', 'terverifikasi')->name('admin.pendaftar.terverifikasi');
        Route::get('/pendaftar/ditolak', 'ditolak')->name('admin.pendaftar.ditolak');
        Route::get('/pendaftar/show/{id}', 'show');
    });
});
