<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prokomChannelController extends Controller
{
    public function index(){
        return view('prokomF1.index-channel-program');
    }

     public function tambah(){
        return view('prokomF1.tambah-channel-program');
    }

    public function simpan(Request $request){
        return redirect('/home')->with('Channel program ditambahkan');
    }
}
