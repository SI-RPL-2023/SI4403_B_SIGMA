<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function pasienBaru() {
        return view("pendaftaran-pasien-baru");
    }

    public function storePasienBaru(Request $request) {
        $foto_ktp = explode('.', $request->file('foto_ktp')->getClientOriginalName())[0];
        $foto_ktp = $foto_ktp . '-' . time() . '.' . $request->file('foto_ktp')->extension();
        $request->file('foto_ktp')->storeAs('uploads/ktp/', $foto_ktp);

        Pasien::create([
            'no_rekam_medis' => 'RM' . rand(0001, 9999),
            'nik' => $request->nik,
            'no_telp' => $request->no_telp,
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'pekerjaan' => $request->pekerjaan,
            'golongan_darah' => $request->golongan_darah,
            'provinsi' => $request->provinsi,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'alamat' => $request->alamat,
            'nama_lengkap_wali' => $request->nama_lengkap_wali,
            'no_telp_wali' => $request->no_telp_wali,
            'jenis_kelamin_wali' => $request->jenis_kelamin_wali,
            'email_wali' => $request->email_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'hubungan_keluarga' => $request->hubungan_keluarga,
            'provinsi_wali' => $request->provinsi_wali,
            'kabupaten_wali' => $request->kabupaten_wali,
            'kecamatan_wali' => $request->kecamatan_wali,
            'alamat_wali' => $request->alamat_wali,
            'foto_ktp' => $foto_ktp,
            'id_user' => auth()->user()->id
        ]);
    }
}
