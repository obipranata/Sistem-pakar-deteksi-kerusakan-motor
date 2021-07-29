<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Detail_kasus_lama;
use App\Models\Kasus_lama;
use App\Models\Kerusakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonsultasiController extends Controller
{
    public function index()
    {
        $konsultasi = DB::select("SELECT konsultasi.*, users.* FROM konsultasi, users WHERE konsultasi.email = users.email COLLATE utf8mb4_unicode_ci GROUP BY konsultasi.email ");
        return view('admin.konsultasi', compact('konsultasi'));
    }
    
    public function detail($email)
    {
        $riwayat = DB::select("SELECT konsultasi.*, jenis_motor.jns_motor,kerusakan.foto_kerusakan, kerusakan.nama_kerusakan, gejala.* FROM konsultasi, detail_konsultasi, kerusakan, gejala, jenis_motor WHERE konsultasi.kd_konsultasi = detail_konsultasi.kd_konsultasi AND gejala.id_gejala = detail_konsultasi.id_gejala AND konsultasi.id_jns_motor = jenis_motor.id_jns_motor AND konsultasi.id_kerusakan = kerusakan.id_kerusakan AND konsultasi.email = '$email' ORDER BY konsultasi.tanggal_konsultasi DESC ");
        $konsultasi = DB::select("SELECT konsultasi.*, jenis_motor.jns_motor FROM konsultasi, jenis_motor WHERE konsultasi.email ='$email' AND konsultasi.id_jns_motor = jenis_motor.id_jns_motor ORDER BY konsultasi.kd_konsultasi DESC ");
        $kerusakan = Kerusakan::all();
        return view('admin.detailkonsultasi', compact('riwayat', 'konsultasi', 'kerusakan'));
    }

    public function updatepengetahuan($kd_konsultasi)
    {
        $detail_konsultasi = DB::table('detail_konsultasi')->where('kd_konsultasi', $kd_konsultasi)->get();
        $konsultasi = DB::table('konsultasi')->where('kd_konsultasi', $kd_konsultasi)->first();

        $kd_terakhir = DB::select("SELECT * FROM `kasus_lama` ORDER BY kd_kasus_lama DESC LIMIT 1");
        
        if (empty($kd_terakhir)) {
            $nama_kasus_lama = 'P-01';
        } else {
            $kd_terakhir_kasus_lama = substr($kd_terakhir[0]->nama_kasus_lama, 2);
            $nama_kasus_lama = 'P-'.sprintf('%02d', $kd_terakhir_kasus_lama+1);
        }

        $kasus_lama = new Kasus_lama();
        $kasus_lama->nama_kasus_lama = $nama_kasus_lama;
        $kasus_lama->id_jns_motor = $konsultasi->id_jns_motor;
        $kasus_lama->id_kerusakan = $konsultasi->id_kerusakan;
        $kasus_lama->save();

        foreach ($detail_konsultasi as $dk) {
            $kd_kasus_lama = $kasus_lama->id;

            $data_detail_kasus_lama = [
                'kd_kasus_lama' => $kd_kasus_lama,
                'id_gejala' => $dk->id_gejala
            ];

            Detail_kasus_lama::insert($data_detail_kasus_lama);
        }

        DB::table('konsultasi')->where('kd_konsultasi', $kd_konsultasi)->update(['status_update'=> 1]);

        return redirect("admin/detailkonsultasi/$konsultasi->email");
    }
}
