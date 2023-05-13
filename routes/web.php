<?php

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

Route::get('/reservasi', function () {
    return view('cek-reservasi-pasien');
});

Route::get("/reservasi-pasien-baru", [ReservasiController::class, 'pasienBaru']);
Route::post("/reservasi-pasien-baru", [ReservasiController::class, 'storePasienBaru']);

Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/doLogin', [UserController::class, 'doLogin'])->name('user.doLogin');
Route::post('/doRegister', [UserController::class, 'doRegister'])->name('user.doRegister');
Route::get('/doLogout', [UserController::class, 'doLogout'])->name('user.doLogout');
