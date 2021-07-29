<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GejalaController extends Controller
{
    public function index(Request $request){
        $data['gejala'] = DB::table('gejala')->get();

        $id_terakhir = DB::select("SELECT * FROM `gejala` ORDER BY id_gejala DESC LIMIT 1");

        if(empty($id_terakhir)){
            $id_gejala = 'G01';
        }else{
            $id_terakhir_gejala = substr($id_terakhir[0]->id_gejala, 1);
            $id_gejala = 'G'.sprintf('%02d', $id_terakhir_gejala+1);
        }

        $data['id_gejala'] = $id_gejala;

        return view('admin.gejala', $data);
    }


    public function store(Request $request){
        $nama_gejala = $request->nama_gejala;

        $id_terakhir = DB::select("SELECT * FROM `gejala` ORDER BY id_gejala DESC LIMIT 1");

        if(empty($id_terakhir)){
            $id_gejala = 'G01';
        }else{
            $id_terakhir_gejala = substr($id_terakhir[0]->id_gejala, 1);
            $id_gejala = 'G'.sprintf('%02d', $id_terakhir_gejala+1);
        }

        Gejala::insert([
            'id_gejala' => $id_gejala,
            'nama_gejala' => $nama_gejala
        ]);
        return 'insert ' .$nama_gejala;
    }

    public function update(Request $request){
        $id_gejala = $_POST['id_gejala'];
        $nama_gejala = $_POST['nama_gejala'];

        DB::table('gejala')->where('id_gejala', $id_gejala)->update(['nama_gejala' => $nama_gejala]);

        $data_gejala = [
            'nama_gejala' => $nama_gejala
        ];
        // Gejala::where('id_gejala', $id_gejala)->update($data_gejala);
        return 'update '.$id_gejala.' '.$nama_gejala;
    }

    public function destroy($id_gejala){
        DB::select("DELETE FROM gejala WHERE id_gejala = '$id_gejala' ");
        return redirect('/gejala');
    }
}
