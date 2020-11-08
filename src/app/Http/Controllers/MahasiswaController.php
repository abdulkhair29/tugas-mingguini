<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MahasiswaController extends Controller
{
    public function index(){
        return view('mahasiswa',[
            "mahasiswa" => \App\Models\Mahasiswa::all()
        ]);
    }

    //

    public function simpan(Request $request){

        \App\Models\Mahasiswa::create([
            "nim" => $request->nim,
            "nama" => $request->nama,
            "telp" => $request->telp,
            "email" => $request->email
        ]);
            return Redirect()->route('mahasiswa.index');
    }
}
