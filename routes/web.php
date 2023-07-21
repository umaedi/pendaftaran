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

Route::get('/login', [\App\Http\Controllers\Admin\AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth/login', [\App\Http\Controllers\Admin\AuthController::class, 'login']);

Route::get('/', function () {
    return view('user.closing');
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
        Route::post('/pendaftar/konfirmasi/{id}', 'konfirmasi');
        Route::post('/pendaftar/tolak/{id}', 'tolak');
    });

    Route::get('/profile', [\App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('admin.profile');
    Route::post('/profile/update/{id}', [\App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('admin.profile.update');
    Route::get('/destroy', [\App\Http\Controllers\Admin\AuthController::class, 'destroy']);

    Route::post('/email/verifikasi', [\App\Http\Controllers\MailController::class, 'verifikasi']);
    Route::post('/email/penolakan', [\App\Http\Controllers\MailController::class, 'penolakan']);
});
