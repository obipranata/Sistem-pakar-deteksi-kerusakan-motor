<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpesifikasiController extends Controller
{
    public function index(){
        return view('pengguna.spesifikasi');
    }
}
