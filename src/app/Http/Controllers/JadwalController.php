<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(){
        return view('jadwal',[
            "jadwal" => \App\Models\Jadwal::all()
        ]);
    }
    //

    public function simpan(Request $request){
        \App\Models\Jadwal::create([
            "kelas_id" => $request->kelas_id,
            "matkul_id" => $request->matkul_id,
            "nidn" => $request->nidn,
            "noruang" => $request->noruang,
            "jeniskelamin" => $request->jeniskelamin,
           "sesi" => $request->sesi
        ]);
        return Redirect()->route('jadwal.index');
    }
}
