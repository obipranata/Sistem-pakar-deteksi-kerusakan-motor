<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request){
        $user = $request->user();
        
        if ($user->level == 1){
            $jenis_motor = DB::table('jenis_motor')->get();
            return view('admin.jenismotor', compact('jenis_motor'));
        } if ($user->level == 2){
            $data['jenis_motor'] = DB::table('jenis_motor')->get();
            $data['gejala'] = DB::table('gejala')->get();
    
            return view('pengguna.konsultasi', $data);
        }
    }
}
