<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kerusakan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KerusakanController extends Controller
{
    public function index(Request $request){
        $kerusakan = DB::table('kerusakan')->get();
        return view('admin.kerusakan', compact('kerusakan'));
    }

    public function create(Request $request){
        return view('admin.addkerusakan');
    }

    public function store(Request $request){
        $nama_kerusakan = $request->nama_kerusakan;
        $solusi = $request->solusi;

        $id_terakhir = DB::select("SELECT * FROM `kerusakan` ORDER BY id_kerusakan DESC LIMIT 1");

        $request->validate([
            'foto_kerusakan' => 'required|mimes:jpg,png'
        ]);

        $namaFoto = time().'.'.$request->foto_kerusakan->extension();

        $request->foto_kerusakan->move(public_path('foto_kerusakan'), $namaFoto);

        if(empty($id_terakhir)){
            $id_kerusakan = 'K01';
            $id_solusi = 'S01';
        }else{
            $id_terakhir_kerusakan = substr($id_terakhir[0]->id_kerusakan, 1);
            $id_terakhir_solusi = substr($id_terakhir[0]->id_solusi, 1);
            $id_kerusakan = 'K'.sprintf('%02d', $id_terakhir_kerusakan+1);
            $id_solusi = 'S'.sprintf('%02d', $id_terakhir_solusi+1);
        }

        $data_kerusakan = [
            'id_kerusakan' => $id_kerusakan,
            'nama_kerusakan' => $nama_kerusakan,
            'id_solusi' => $id_solusi,
            'solusi' => $solusi,
            'foto_kerusakan' => $namaFoto
        ];
        Kerusakan::insert($data_kerusakan);
        return redirect('/kerusakan');
    }

    public function edit($id_kerusakan){
        $kerusakan = DB::table('kerusakan')->where('id_kerusakan', $id_kerusakan)->first();
        return view('admin.updatekerusakan', compact('kerusakan'));
    }

    public function update(Request $request, $id_kerusakan){
        $nama_kerusakan = $request->nama_kerusakan;
        $solusi = $request->solusi;

        $kerusakan = DB::table('kerusakan')->where('id_kerusakan', $id_kerusakan)->first();
        if(!$request->foto_kerusakan){
            $namaFoto = $kerusakan->foto_kerusakan;
        }else{
            $request->validate([
                'foto_kerusakan' => 'mimes:jpg,png'
            ]);
            $namaFoto = time().'.'.$request->foto_kerusakan->extension();
            if (!empty($kerusakan->foto_kerusakan)) {
                unlink('foto_kerusakan/'.$kerusakan->foto_kerusakan);
            }
            $request->foto_kerusakan->move(public_path('foto_kerusakan'), $namaFoto);
        }
        
        $data_kerusakan = [
            'nama_kerusakan' => $nama_kerusakan,
            'solusi' => $solusi,
            'foto_kerusakan' => $namaFoto
        ];

        DB::table('kerusakan')->where('id_kerusakan', $id_kerusakan)->update($data_kerusakan);

        return redirect('/kerusakan');
    }

    public function destroy($id_kerusakan){
        $kerusakan = DB::table('kerusakan')->where('id_kerusakan', $id_kerusakan)->first();

        if($kerusakan->foto_kerusakan != ''){
            unlink('foto_kerusakan/'.$kerusakan->foto_kerusakan);
        }
        DB::select("DELETE FROM kerusakan WHERE id_kerusakan = '$id_kerusakan' ");
        return redirect('/kerusakan');
    }
}
