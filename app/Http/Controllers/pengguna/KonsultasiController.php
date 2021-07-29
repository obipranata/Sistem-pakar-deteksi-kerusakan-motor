<?php

namespace App\Http\Controllers\pengguna;

use App\Http\Controllers\Controller;
use App\Models\Detail_konsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonsultasiController extends Controller
{
    public function index(Request $request)
    {
        $data['jenis_motor'] = DB::table('jenis_motor')->get();
        $data['gejala'] = DB::table('gejala')->get();

        return view('pengguna.konsultasi', $data);
    }

    public function hitung(Request $request)
    {
        $id_jns_motor = $request->id_jns_motor;

        if ($id_jns_motor == 'pilih') {
            return redirect('/')->with('gagal', 'anda belum pilih jenis motor');
        }
        if ($request->id_gejala == null) {
            return redirect('/')->with('gagal', 'anda belum pilih gejala');
        }

        $id_gejala =  implode("','", $request->id_gejala);
        $gejala = $request->id_gejala;
        
        $jml_gejala = DB::select("SELECT count(id_gejala) as jml_gejala FROM gejala");
        
        $jml_kerusakan = DB::select("SELECT count(id_kerusakan) as jml_kerusakan FROM kerusakan");

        $data_kasus_lama =  DB::select("SELECT * FROM kasus_lama ");
        
        $kasus_lama = DB::select("SELECT kasus_lama.*, jenis_motor.jns_motor, kerusakan.nama_kerusakan, detail_kasus_lama.kd_detail_kasus_lama ,gejala.id_gejala, gejala.nama_gejala FROM kasus_lama, jenis_motor, kerusakan, gejala, detail_kasus_lama WHERE kasus_lama.id_jns_motor = jenis_motor.id_jns_motor AND kasus_lama.id_kerusakan = kerusakan.id_kerusakan AND gejala.id_gejala = detail_kasus_lama.id_gejala AND detail_kasus_lama.kd_kasus_lama = kasus_lama.kd_kasus_lama AND kasus_lama.id_jns_motor = '$id_jns_motor' ");

        $count_sama = DB::select("SELECT kasus_lama.*, count(kasus_lama.kd_kasus_lama) as jml_gejala_sama, detail_kasus_lama.id_gejala FROM kasus_lama, jenis_motor, kerusakan, gejala, detail_kasus_lama WHERE kasus_lama.id_jns_motor = jenis_motor.id_jns_motor AND kasus_lama.id_kerusakan = kerusakan.id_kerusakan AND gejala.id_gejala = detail_kasus_lama.id_gejala AND detail_kasus_lama.kd_kasus_lama = kasus_lama.kd_kasus_lama AND kasus_lama.id_jns_motor = '$id_jns_motor' AND detail_kasus_lama.id_gejala IN ('$id_gejala') GROUP BY kasus_lama.kd_kasus_lama");

        // dd($count_sama);
        
        $p = 1/$jml_kerusakan[0]->jml_kerusakan;
        $peluang = ((0 + $jml_gejala[0]->jml_gejala) * $p) / (1+$jml_gejala[0]->jml_gejala);

        $rumus_nc = "0 + ".$jml_gejala[0]->jml_gejala." X ".$p." / 1 + ".$jml_gejala[0]->jml_gejala;

        foreach ($kasus_lama as $k) {
            $a[] = $k->nama_kasus_lama;
        }
        foreach ($count_sama as $k) {
            $b[] = $k->nama_kasus_lama;
        }
        
        // bandingkan 2 array(ambil yang tidak ada didalam count sama)
        $result=array_diff($a, $b);
        
        $gejala_sama = [];
        foreach ($count_sama as $c) {
            for ($i=0; $i< count($gejala) - $c->jml_gejala_sama; $i++) {
                $gejala_sama[] = [
                    'peluang' => number_format($peluang, 10),
                    'nama' => $c->nama_kasus_lama
                ];
            }
        }

        foreach (array_unique($result) as $r) {
            for ($i=0; $i< count($gejala); $i++) {
                array_push($gejala_sama, [
                    'peluang' => number_format($peluang, 10),
                    'nama' => $r,
                ]);
            }
        }
    
        foreach ($kasus_lama as $k) {
            foreach ($gejala as $g) {
                if ($g == $k->id_gejala) {
                    $peluang = ((1 + $jml_gejala[0]->jml_gejala) * $p) / (1+$jml_gejala[0]->jml_gejala);
                    array_push($gejala_sama, [
                        'peluang' => number_format($peluang, 10),
                        'nama' => $k->nama_kasus_lama,
                        'id_gejala' => $k->id_gejala
                    ]);
                }
            }
        }

        for ($i=0; $i<count($data_kasus_lama); $i++) {
            $detail_hitung[$i] = 1;
            $hasil[$i] = 1;
            for ($j=0; $j<count($gejala_sama); $j++) {
                if ($data_kasus_lama[$i]->nama_kasus_lama == $gejala_sama[$j]['nama']) {
                    if (!empty($gejala_sama[$j]['id_gejala'])) {
                        $ig = $gejala_sama[$j]['id_gejala'];
                    } else {
                        $ig = 0;
                    }

                    $hasil[$i] = $hasil[$i] * $gejala_sama[$j]['peluang'];
                    $detail_hitung[$i] = $detail_hitung[$i]. ' X '. $gejala_sama[$j]['peluang'];
                    $data_hasil[] = [
                        'hasil' => $hasil[$i] * $p,
                        'id_gejala' => $ig,
                        'nama' => $data_kasus_lama[$i]->nama_kasus_lama,
                        'detail_hitung' => $detail_hitung[$i] .' X '. $p
                    ];
                    $tampilkan_nama[] = $data_kasus_lama[$i]->nama_kasus_lama;
                }
            }
        }
        
        $k=1;
        foreach (array_unique($tampilkan_nama) as $t) {
            $data['hasil_akhir'][] = $data_hasil[$k*count($gejala)-1];
            // var_dump($data_hasil[$k*count($gejala)-1]['hasil']);
            $k++;
        }

        arsort($data['hasil_akhir']);
        // dd($data['hasil_akhir']);
        $data['p'] = "1 / ".$jml_kerusakan[0]->jml_kerusakan;
        $data['m'] = $jml_gejala;
        $data['kasus_lama'] = DB::select("SELECT kasus_lama.*, kerusakan.nama_kerusakan, kerusakan.solusi, jenis_motor.jns_motor FROM kasus_lama, kerusakan, jenis_motor WHERE kasus_lama.id_kerusakan = kerusakan.id_kerusakan AND kasus_lama.id_jns_motor = '$id_jns_motor' AND jenis_motor.id_jns_motor = kasus_lama.id_jns_motor ");

        $user = $request->user();
        $hasil_tertinggi = max($data['hasil_akhir']);

        $d_kasus_lama = DB::table('kasus_lama')->get();
        foreach ($data['hasil_akhir'] as $d) {
            if ($hasil_tertinggi['hasil'] == $d['hasil']) {
                foreach ($d_kasus_lama as $dk) {
                    if ($d['nama'] == $dk->nama_kasus_lama) {
                        $d_konsultasi[] = [
                            'tanggal_konsultasi' => date('Y-m-d'),
                            'email' => $user->email,
                            'id_jns_motor' => $id_jns_motor,
                            'id_kerusakan' => $dk->id_kerusakan,
                            'hasil' => $d['hasil']
                        ];
                    }
                }
            }
        }

        foreach ($d_konsultasi as $d) {
            if ($hasil_tertinggi['hasil'] == $d['hasil']) {
                $data_konsultasi = [
                    'tanggal_konsultasi' => date('Y-m-d'),
                    'email' => $user->email,
                    'id_jns_motor' => $id_jns_motor,
                    'id_kerusakan' => $d['id_kerusakan'],
                    'status' => 1,
                    'status_update' => 0
                ];

                $kd_konsultasi = DB::table('konsultasi')->insertGetId($data_konsultasi);
        
                for ($i=0; $i< count($gejala); $i++) {
                    $data_detail_konsultasi = [
                        'kd_konsultasi' => $kd_konsultasi,
                        'id_gejala' => $gejala[$i]
                    ];
                    Detail_konsultasi::insert($data_detail_konsultasi);
                }
            }
        }
        
        $data['jml_hasil_kerusakan'] = count($d_konsultasi);
        // dd($data_konsultasi);

        return view('pengguna.hasilkonsultasi', $data);
    }
}
