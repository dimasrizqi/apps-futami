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
        $biaya = $request->biaya;
        for($count = 0; $count < count($biaya); $count++){
            $data = array(
                'biaya' => $biaya[$count],
                'creator' => $request->creator,
                'no_proposal'=> $request->no_proposal
            );
            $insert_data[] = $data; 
        }
        
        DB::table('cost_sheet')->insert(
            array(
                'item_cost' => $request->item_cost,
                'avg_penjualan' => $request->avg_penjualan,
                'target' => $request->target,
                'no_proposal' => $request->no_proposal,
                'creator' => $request->creator,
                ));
         
         DB::table('rincian_budget')->insert($insert_data);
         return redirect()->back();
        //  return redirect()->route('prokomF1-tambah');
    }
}
