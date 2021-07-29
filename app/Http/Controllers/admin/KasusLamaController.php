<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Detail_kasus_lama;
use App\Models\Kasus_lama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KasusLamaController extends Controller
{
    public function index(Request $request){
        $kasus_lama = DB::select("SELECT kasus_lama.*, jenis_motor.jns_motor, kerusakan.nama_kerusakan FROM kasus_lama, jenis_motor, kerusakan WHERE kasus_lama.id_jns_motor = jenis_motor.id_jns_motor AND kasus_lama.id_kerusakan = kerusakan.id_kerusakan ORDER BY kasus_lama.kd_kasus_lama");

        return view('admin.kasuslama', compact('kasus_lama'));
    }

    public function show($kd_kasus_lama){
        $detail_kasus_lama = DB::select("SELECT kasus_lama.*, jenis_motor.jns_motor, kerusakan.nama_kerusakan, detail_kasus_lama.kd_detail_kasus_lama ,gejala.id_gejala, gejala.nama_gejala FROM kasus_lama, jenis_motor, kerusakan, gejala, detail_kasus_lama WHERE kasus_lama.id_jns_motor = jenis_motor.id_jns_motor AND kasus_lama.id_kerusakan = kerusakan.id_kerusakan AND gejala.id_gejala = detail_kasus_lama.id_gejala AND detail_kasus_lama.kd_kasus_lama = kasus_lama.kd_kasus_lama AND detail_kasus_lama.kd_kasus_lama = '$kd_kasus_lama' ");

        if (empty($detail_kasus_lama)){
            return redirect('/detailkasuslama/'.$kd_kasus_lama);
        }

        return view('admin.detailkasuslama', compact('detail_kasus_lama'));
    }

    public function create(Request $request){

        $kd_terakhir = DB::select("SELECT * FROM `kasus_lama` ORDER BY kd_kasus_lama DESC LIMIT 1");
        
        if(empty($kd_terakhir)){
            $nama_kasus_lama = 'P-01';
        }else{
            $kd_terakhir_kasus_lama = substr($kd_terakhir[0]->nama_kasus_lama, 2);
            $nama_kasus_lama = 'P-'.sprintf('%02d', $kd_terakhir_kasus_lama+1);
        }

        $data['nama_kasus_lama'] = $nama_kasus_lama;

        $data['kerusakan'] = DB::table('kerusakan')->get();
        $data['jenis_motor'] = DB::table('jenis_motor')->get();
        $data['gejala'] = DB::table('gejala')->get();
        return view('admin.addkasuslama', $data);
    }

    public function store(Request $request){
        $id_gejala = $request->id_gejala;

        $nama_kasus_lama = $request->nama_kasus_lama;
        $id_jns_motor = $request->id_jns_motor;
        $id_kerusakan = $request->id_kerusakan;

        $kasus_lama = new Kasus_lama();
        for($i=0; $i<count($id_gejala); $i++){
            if ($id_gejala[$i] == 'Pilih'){
                return redirect('/kasuslama/create');
            } else {
                
                    $kasus_lama->nama_kasus_lama = $nama_kasus_lama;
                    $kasus_lama->id_jns_motor = $id_jns_motor;
                    $kasus_lama->id_kerusakan = $id_kerusakan;
                    $kasus_lama->save();

                    $kd_kasus_lama = $kasus_lama->id;

                $data_detail_kasus_lama = [
                    'kd_kasus_lama' => $kd_kasus_lama,
                    'id_gejala' => $id_gejala[$i]
                ];

                Detail_kasus_lama::insert($data_detail_kasus_lama);
            }
        }


        return redirect('/kasuslama');
    }

    public function edit($kd_kasus_lama){
        $data['kerusakan'] = DB::table('kerusakan')->get();
        $data['jenis_motor'] = DB::table('jenis_motor')->get();
        $data['kasus_lama'] = DB::select("SELECT kasus_lama.*, jenis_motor.jns_motor, kerusakan.nama_kerusakan FROM kasus_lama, jenis_motor, kerusakan WHERE kasus_lama.id_jns_motor = jenis_motor.id_jns_motor AND kasus_lama.id_kerusakan = kerusakan.id_kerusakan AND kasus_lama.kd_kasus_lama = '$kd_kasus_lama' ");
        return view('admin.updatekasuslama', $data);
    }

    public function update(Request $request, $kd_kasus_lama){
        $nama_kasus_lama = $request->nama_kasus_lama;
        $id_jns_motor = $request->id_jns_motor;
        $id_kerusakan = $request->id_kerusakan;
        
        $data_kasus_lama = [
            'nama_kasus_lama' => $nama_kasus_lama,
            'id_jns_motor' => $id_jns_motor,
            'id_kerusakan' => $id_kerusakan
        ];

        DB::table('kasus_lama')->where('kd_kasus_lama', $kd_kasus_lama)->update($data_kasus_lama);

        return redirect('/kasuslama');
    }

    public function destroy($kd_kasus_lama){
        DB::select("DELETE FROM kasus_lama WHERE kd_kasus_lama = '$kd_kasus_lama' ");
        return redirect('/kasuslama');
    }

    public function getGejala(){
        $gejala = DB::table('gejala')->get();
        return $gejala;
    }
}
