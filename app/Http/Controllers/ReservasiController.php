<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function pasienBaru() {
        return view("pendaftaran-pasienbaru");
    }

    public function storePasienBaru(Request $request) {
        
    }
}
