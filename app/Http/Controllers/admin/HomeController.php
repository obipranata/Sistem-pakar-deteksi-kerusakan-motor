<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request){
        $data['jenis_motor'] = DB::select("SELECT count(id_jns_motor) as jml FROM jenis_motor"); 
        $data['gejala'] = DB::select("SELECT count(id_gejala) as jml FROM gejala"); 
        $data['kerusakan'] = DB::select("SELECT count(id_kerusakan) as jml FROM kerusakan"); 
        $data['kasus_lama'] = DB::select("SELECT count(kd_kasus_lama) as jml FROM kasus_lama"); 
        $data['pengguna'] = DB::select("SELECT count(id) as jml FROM users WHERE level = '2' ");  
        $data['konsultasi'] = DB::select("SELECT count(kd_konsultasi) as jml FROM konsultasi ");  
        return view('admin.dashboard', $data);
    }
}
