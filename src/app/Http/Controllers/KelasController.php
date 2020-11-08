<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        return view('kelas',[
            "kelas" => \App\Models\Kelas::all()
        ]);
    }
    //
    public function simpan(Request $request){
        \App\Models\Kelas::create([
            "namakelas" => $request->namakelas,
            "sesi" => $request->sesi,
         /*    "jurusan" => $request->jurusan */
        ]);
        return Redirect()->route('kelas.index');
    }
}
