<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggunaController extends Controller
{
    public function index(){
        $pengguna = DB::table("users")->where('level', 2)->get();
        return view('admin.pengguna', compact('pengguna'));
    }
}
