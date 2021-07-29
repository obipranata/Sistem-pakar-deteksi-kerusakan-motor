<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Detail_kasus_lama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailKasusLamaController extends Controller
{
    public function show($kd_kasus_lama){
        $data['detail_kasus_lama'] = DB::select("SELECT kasus_lama.*, jenis_motor.jns_motor, kerusakan.nama_kerusakan, detail_kasus_lama.kd_detail_kasus_lama ,gejala.id_gejala, gejala.nama_gejala FROM kasus_lama, jenis_motor, kerusakan, gejala, detail_kasus_lama WHERE kasus_lama.id_jns_motor = jenis_motor.id_jns_motor AND kasus_lama.id_kerusakan = kerusakan.id_kerusakan AND gejala.id_gejala = detail_kasus_lama.id_gejala AND detail_kasus_lama.kd_kasus_lama = kasus_lama.kd_kasus_lama AND detail_kasus_lama.kd_kasus_lama = '$kd_kasus_lama' ");

        if (empty($data['detail_kasus_lama'])){
            $data['detail_kasus_lama'] = DB::select("SELECT kasus_lama.*, jenis_motor.jns_motor, kerusakan.nama_kerusakan ,gejala.id_gejala, gejala.nama_gejala FROM kasus_lama, jenis_motor, kerusakan, gejala WHERE kasus_lama.id_jns_motor = jenis_motor.id_jns_motor AND kasus_lama.id_kerusakan = kerusakan.id_kerusakan AND kasus_lama.kd_kasus_lama = '$kd_kasus_lama'");
        }

        $data['gejala'] = DB::table('gejala')->get();
    

        return view('admin.adddetailkasuslama', $data);
    }

    public function add(Request $request, $kd_kasus_lama){
        $id_gejala = $request->id_gejala;
            for ($i=0; $i<count($id_gejala); $i++) {
                if ($id_gejala[$i] == 'Pilih') {
                    return redirect('/detailkasuslama/'.$kd_kasus_lama);
                } else {
                    $data_detail_kasus_lama = [
                    'kd_kasus_lama' => $kd_kasus_lama,
                    'id_gejala' => $id_gejala[$i]
                ];

                    Detail_kasus_lama::insert($data_detail_kasus_lama);
                }
            }
       


        return redirect('/kasuslama/'.$kd_kasus_lama);
    }

    
    public function delete(Request $request, $kd_detail_kasus_lama, $kd_kasus_lama){
        DB::select("DELETE FROM detail_kasus_lama WHERE kd_detail_kasus_lama = '$kd_detail_kasus_lama' ");
        return redirect('/kasuslama/'.$kd_kasus_lama);
    }
}
