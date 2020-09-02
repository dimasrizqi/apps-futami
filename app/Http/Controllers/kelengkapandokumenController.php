<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kelengkapandokumenController extends Controller
{
    public function tambah(){
        return view('prokomF1.kelengkapandokumen.tambah');
    }
    public function index(){
        $kd=DB::table('kelengkapan_dokumen')->get();
        return view('prokomF1.kelengkapandokumen.index',['kd'=>$kd]);
    }

    public function simpan(Request $request){
        DB::insert('insert into kelengkapan_dokumen (vendor)
            values (?)', 
            [$request->vendor]);
        DB::insert('insert into lampiran (lampiran)
            values (?)', 
            [$request->vendor]);
        return redirect()->route('kelengkapan-dokumen-tambah-lampiran');
    }
    public function simpanlampiran(Request $request){
        DB::insert('insert into lampiran (lampiran)
            values (?)', 
            [$request->lampiran]);
        return redirect()->route('kelengkapan-dokumen-index');
    }
}
