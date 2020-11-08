<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class MatakuliahController extends Controller
{
    public function index(){
        return view('matakuliah',[
            "matakuliah" => \App\Models\Matakuliah::all()
        ]);
    }
    //

    public function simpan(Request $request){
        \App\Models\Matakuliah::create([
            "nama" => $request->nama
        ]);
            return redirect()->route('matakuliah.index');
    }
}
