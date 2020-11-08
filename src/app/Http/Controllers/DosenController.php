<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        return view('dosen',[
            "dosen" => \App\Models\Dosen::all()
        ]);
    }
    //

    public function simpan(Request $request){

        \App\Models\Dosen::create([
            "nidn" => $request->nidn,
            "nama" => $request->nama,
            "telp" => $request->telp,
            "email" => $request->email
        ]);
            return Redirect()->route('dosen.index');
    }
}
