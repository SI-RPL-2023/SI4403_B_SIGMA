<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PendaftaranPasienController;

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

// route::get('/', fn () => view ('home'));
Route::get('/', function () {
    return view('homepage');
});

Route::get('/reservasi', function () {
    return view('cek-reservasi-pasien');
});
Route::get('/pendaftaran-pasien', [PendaftaranPasienController::class, 'index'])->name('pasien.index');
Route::get('/poliklinik', [PendaftaranPasienController::class, 'poliklinik']);

Route::get("/pendaftaran-pasien-baru", [PendaftaranController::class, 'pasienBaru']);
Route::post("/pendaftaran-pasien-baru", [PendaftaranController::class, 'storePasienBaru']);

Route::get("/cek-reservasi", [ReservasiController::class, "index"]);
Route::post("/cek-reservasi", [ReservasiController::class, "cekReservasi"]);

Route::get('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/register', [UserController::class, 'register'])->name('user.register');
Route::post('/doLogin', [UserController::class, 'doLogin'])->name('user.doLogin');
Route::post('/doRegister', [UserController::class, 'doRegister'])->name('user.doRegister');
Route::get('/doLogout', [UserController::class, 'doLogout'])->name('user.doLogout');


// DATA INDONESIA 
Route::get('getKota', [PendaftaranPasienController::class, 'getKota']);
Route::get('getKecamatan', [PendaftaranPasienController::class, 'getKecamatan']);
// END DATA INDO
Route::group(['middleware' => ['login']], function () {
    Route::get('pendaftaran-pasien', [PendaftaranPasienController::class, 'index']);
    Route::post('pendaftaran-pasien/daftar', [PendaftaranPasienController::class, 'daftar_pasien']);
    Route::get('pilih-poli', [PendaftaranPasienController::class, 'pilih_poli']);
    Route::get('poliklinik', [PendaftaranPasienController::class, 'poliklinik']);
    Route::get('getWaktuPeriksa', [PendaftaranPasienController::class, 'getWaktuPeriksa']);
    Route::get('getTglPeriksa', [PendaftaranPasienController::class, 'getTglPeriksa']);
    Route::post('doReservasi', [PendaftaranPasienController::class, 'doReservasi']);
    Route::get('reservasi', [PendaftaranPasienController::class, 'form_reservasi']);
    Route::get('cek-reservasi', [PendaftaranPasienController::class, 'hasil_reservasi']);
    Route::get('tampil-hasil-reservasi/{id}', [PendaftaranPasienController::class, 'tampil_hasil_reservasi']);
    Route::get('cetak-reservasi/{id}', [PendaftaranPasienController::class, 'cetak_reservasi']);
    Route::get('form-obat', [PendaftaranPasienController::class, 'form_cek_obat']);
    Route::get('cek-obat', [PendaftaranPasienController::class, 'hasil_obat']);
    Route::get('tampil-hasil-obat/{id}', [PendaftaranPasienController::class, 'tampil_hasil_obat']);
    Route::get('cetak-obat/{id}', [PendaftaranPasienController::class, 'cetak_obat']);
});

// Admin
Route::group(['middleware' => ['login_admin']], function () {
    Route::get('cek-reservasi-pasien', [AdminController::class, 'cek_reservasi_pasien']);
    Route::post('ubah-status-reservasi/{id}', [AdminController::class, 'ubah_status']);
    Route::get('master-poli', [AdminController::class, 'master_poli']);
    Route::post('master-poli-simpan', [AdminController::class, 'master_poli_simpan']);
    Route::post('master-poli-update/{id}', [AdminController::class, 'master_poli_update']);
    Route::post('master-poli-delete/{id}', [AdminController::class, 'master_poli_delete']);
    Route::get('master-dokter', [AdminController::class, 'master_dokter']);
    Route::post('master-dokter-simpan', [AdminController::class, 'master_dokter_simpan']);
    Route::post('master-dokter-update/{id}', [AdminController::class, 'master_dokter_update']);
    Route::post('master-dokter-delete/{id}', [AdminController::class, 'master_dokter_delete']);
    Route::get('master-jadwal', [AdminController::class, 'master_jadwal']);
    Route::post('master-jadwal-simpan', [AdminController::class, 'master_jadwal_simpan']);
    Route::post('master-jadwal-update/{id}', [AdminController::class, 'master_jadwal_update']);
    Route::post('master-jadwal-delete/{id}', [AdminController::class, 'master_jadwal_delete']);
    Route::get('master-obat', [AdminController::class, 'master_obat']);
    Route::post('master-obat-simpan', [AdminController::class, 'master_obat_simpan']);
    Route::post('master-obat-update/{id}', [AdminController::class, 'master_obat_update']);
    Route::post('master-obat-delete/{id}', [AdminController::class, 'master_obat_delete']);
    Route::get('home-admin', [AdminController::class, 'home']);
});
