<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class prokomController extends Controller

{
    public function index(){
        $data_prokomf1 = DB::table('prokomf1')->get();
        return view('prokomF1.index',['data_prokomf1' => $data_prokomf1]);
        
    }

    public function tambah(){
        return view('prokomF1.tambah');
    }

    public function simpan(Request $request){
        DB::insert('insert into prokomf1 (kepada_yth, di_ketahui, nama_program) values (?, ?,?)', [$request->kepada_yth, $request->di_ketahui, $request->nama_program]);
        // dd($request->all());
        return redirect()->route('prokomF1-index');
    }
}
