<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class costsheetController extends Controller
{
    public function index(){
        
        // return view('crud.index',['data_barang' => $data_barang]);
        
    }

    public function tambah(){
        $item_cost = DB::table('item_cost')->orderBy('id_cost_center','asc')->get();
        return view('prokomF1.costsheet.tambah',["item_cost"=>$item_cost]);
    }

    public function simpan(Request $request){
        // DB::insert('insert into crud (kode_barang, nama_barang) values (?, ?)', [$request->kode_barang, $request->nama_barang]);
        // // dd($request->all());
        // return redirect()->route('crud-index');
    }
}
