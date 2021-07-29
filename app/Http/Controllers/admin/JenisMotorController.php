<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Jenis_motor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisMotorController extends Controller
{
    public function index(Request $request){
        $jenis_motor = DB::table('jenis_motor')->get();
        return view('admin.jenismotor', compact('jenis_motor'));
    }


    public function store(Request $request){
        $jns_motor = $request->jns_motor;
        Jenis_motor::insert(['jns_motor' => $jns_motor]);
        return 'insert ' .$jns_motor;
    }

    public function update(Request $request){
        $id_jns_motor = $request->id_jns_motor;
        $jns_motor = $request->jns_motor;

        DB::table('jenis_motor')->where('id_jns_motor', $id_jns_motor)->update(['jns_motor' => $jns_motor]);

        return 'update '.$id_jns_motor.' '.$jns_motor;
    }

    public function destroy($id_jns_motor){
        DB::select("DELETE FROM jenis_motor WHERE id_jns_motor = '$id_jns_motor' ");
        return redirect('/jenismotor');
    }
}
