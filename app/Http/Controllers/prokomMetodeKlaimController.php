<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prokomMetodeKlaimController extends Controller
{
    public function index(){
        return view('prokomF1.index-metode-klaim');
    }

     public function tambah(){
        return view('prokomF1.tambah-metode-klaim');
    }

    public function simpan(Request $request){
        return redirect('/home')->with('Channel program ditambahkan');
    }
}
