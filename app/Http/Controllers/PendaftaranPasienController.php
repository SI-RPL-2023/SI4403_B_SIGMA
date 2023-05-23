<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kode = "RM-" . date('Y') . '-';
        $currentKode = date('Y');
        $lastDigit = DB::table('pasien')
        ->select(DB::raw("IFNULL(MAX(SUBSTRING(no_rekam_medis, 9, 7)), 0)+1 digit"))
        ->where(DB::raw("SUBSTRING(no_rekam_medis, 4, 4)"), '=', $currentKode)
            ->first();
        $lastDigit = json_decode(json_encode($lastDigit), true);

        $kode .= sprintf("%07s", $lastDigit['digit']);

        return view('pendaftaran-pasien', ['no_rekam_medis' => $kode]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
