<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\Controller;
use App\Models\Kerusakan;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class RiwayatKonsultasiController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $email = $user->email;
        $riwayat = DB::select("SELECT konsultasi.*, jenis_motor.jns_motor,kerusakan.foto_kerusakan, kerusakan.nama_kerusakan, kerusakan.solusi ,gejala.* FROM konsultasi, detail_konsultasi, kerusakan, gejala, jenis_motor WHERE konsultasi.kd_konsultasi = detail_konsultasi.kd_konsultasi AND gejala.id_gejala = detail_konsultasi.id_gejala AND konsultasi.id_jns_motor = jenis_motor.id_jns_motor AND konsultasi.id_kerusakan = kerusakan.id_kerusakan AND konsultasi.email = '$email' AND konsultasi.status = '1' ORDER BY konsultasi.tanggal_konsultasi DESC ");
        $konsultasi = DB::select("SELECT konsultasi.*, jenis_motor.jns_motor FROM konsultasi, jenis_motor WHERE konsultasi.email ='$email' AND konsultasi.id_jns_motor = jenis_motor.id_jns_motor AND konsultasi.status = '1' ORDER BY konsultasi.kd_konsultasi DESC ");
        // $konsultasi = DB::table('konsultasi')->where('email',$email)->orderBy('kd_konsultasi','DESC')->get();
        $kerusakan = Kerusakan::all();
        return view('pengguna.riwayat', compact('riwayat', 'konsultasi', 'kerusakan'));
    }

    public function download(Request $request)
    {
        $dari = $request->dari;
        $sampai = $request->sampai;
        $user = $request->user();
        $email = $user->email;

        $data['nama'] = $user->name;
        // $data['konsultasi'] = DB::select("SELECT * FROM konsultasi WHERE email = '$email' AND (tanggal_konsultasi BETWEEN '$dari' AND '$sampai') ORDER BY kd_konsultasi DESC ");
        $data['konsultasi'] = DB::select("SELECT konsultasi.*, jenis_motor.jns_motor FROM konsultasi, jenis_motor WHERE konsultasi.email ='$email' AND konsultasi.id_jns_motor = jenis_motor.id_jns_motor AND (konsultasi.tanggal_konsultasi BETWEEN '$dari' AND '$sampai') AND konsultasi.status = '1' ORDER BY konsultasi.kd_konsultasi DESC ");
        $data['kerusakan'] = Kerusakan::all();

        $data['riwayat'] = DB::select("SELECT konsultasi.*, jenis_motor.jns_motor, kerusakan.foto_kerusakan, kerusakan.nama_kerusakan, gejala.* FROM konsultasi, detail_konsultasi, kerusakan, gejala, jenis_motor WHERE konsultasi.kd_konsultasi = detail_konsultasi.kd_konsultasi AND gejala.id_gejala = detail_konsultasi.id_gejala AND konsultasi.id_jns_motor = jenis_motor.id_jns_motor AND konsultasi.id_kerusakan = kerusakan.id_kerusakan AND konsultasi.email = '$email' AND konsultasi.status = '1' AND (konsultasi.tanggal_konsultasi BETWEEN '$dari' AND '$sampai') ");
        // return view('pengguna.riwayat_download', $data);
        $pdf = PDF::loadView('pengguna.riwayat_download', $data);
        return $pdf->download('riwayatkonsultasi.pdf');
    }

    public function delete($kd_konsultasi)
    {
        DB::table('konsultasi')->where('kd_konsultasi', $kd_konsultasi)->update(['status'=> 0]);

        return redirect('/riwayatkonsultasi');
    }
}
