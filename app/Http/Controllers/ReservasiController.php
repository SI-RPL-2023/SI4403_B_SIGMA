<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservasiController extends Controller
{
    public function index() {
        return view("cek-reservasi");
    }

    public function cekReservasi(Request $request) {
        $cek = DB::table('reservasi as a')
                ->join('pasien as b', 'a.no_rekam_medis', '=', 'b.no_rekam_medis')
                ->join('jadwal as c', 'a.id_jadwal', '=', 'c.id')
                ->join('dokter as d', 'a.id_dokter', '=', 'd.id')
                ->join('poli as e', 'd.id_poli', '=', 'e.id')
                ->select('a.*', 'b.nama_lengkap as nama_pasien', 
                'b.no_telp', 'b.alamat',
                'c.jadwal_mulai','c.jadwal_selesai',
                'd.nama as nama_dokter',
                'e.nama as nama_poli')
                ->where('a.no_rekam_medis', $request->no_rekam_medis)
                ->first();

        if($cek)
        {
            if($cek->status == '0')
            {
                return redirect()->back()->with('error', 'Akses dilarang');      
            } else if($cek->status == '1') {
                return view('cetak-reservasi', compact('cek'));
            }       
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan');
        }
    }
}
