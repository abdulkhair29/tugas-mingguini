<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index(){
        return view('absensi',[
            "absensi" => \App\Models\Absensi::all()
        ]);
    }
    //
    public function simpan(Request $request){
        \App\Models\Absensi::created([
            "jadwal_id" => $request->jadwal_id,
            "nim" => $request->nim,
            "tgl" => $request->tgl,
            "hadir" => $request->hadir
        ]);
        return Redirect()->route('absensi.index');
    }
}
