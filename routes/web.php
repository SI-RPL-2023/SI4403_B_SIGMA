<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('homepage');
});

Route::get("/pendaftaran-pasien-baru", [PendaftaranController::class, 'pasienBaru']);
Route::post("/pendaftaran-pasien-baru", [PendaftaranController::class, 'storePasienBaru']);

Route::get("/cek-reservasi", [ReservasiController::class, "index"]);
Route::post("/cek-reservasi", [ReservasiController::class, "cekReservasi"]);

Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/doLogin', [UserController::class, 'doLogin'])->name('user.doLogin');
Route::post('/doRegister', [UserController::class, 'doRegister'])->name('user.doRegister');
Route::get('/doLogout', [UserController::class, 'doLogout'])->name('user.doLogout');
