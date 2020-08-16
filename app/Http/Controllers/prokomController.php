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

    public function detail(Request $request){
        $data_prokomf1 = DB::table('prokomf1')->where('id',$request->id)->get();
        return view('prokomF1.detail',['data_prokomf1' => $data_prokomf1]);
        //dd($request->id);
    }
    
    public function tambah(){
        return view('prokomF1.tambah');
    }

    public function update(Request $request){
        dd($request->all());
    }

    public function simpan(Request $request){
        DB::insert('insert into prokomf1 (
            kepada_yth, 
            nomor_proposal, 
            kode_rkb, 
            nama_program, 
            di_ketahui, 
            brand_item, 
            area_program, 
            region_program, 
            revisi_ke, 
            channel_program, 
            background_informasi, 
            ketentuan_catatan, 
            pic_brand_commercial, 
            pic_sales_distribution, 
            pic_finance_accounting,  
            mekanisme_program, 
            no_pr, 
            klaim_tagihan_ke, 
            metode_klaim, 
            faktur_pajak,  
            disiapkan_oleh, 
            batas_akhir_klaim, 
            periode_program_start, 
            periode_program_end
        )

         values (
             ?,?,?,?,?,
             ?,?,?,?,?,
             ?,?,?,?,?,
             ?,?,?,?,?,
             ?,?,?,?)',

         [$request->kepada_yth, 
         $request->nomor_proposal, 
         $request->kode_rkb, 
         $request->nama_program, 
         $request->di_ketahui, 
         $request->brand_item, 
         $request->area_program, 
         $request->region_program, 
         $request->revisi_ke, 
         $request->channel_program, 
         $request->background_informasi, 
         $request->ketentuan_catatan, 
         $request->pic_brand_commercial, 
         $request->pic_sales_distribution, 
         $request->pic_finance_accounting,  
         $request->mekanisme_program, 
         $request->no_pr, 
         $request->klaim_tagihan_ke, 
         $request->metode_klaim, 
         $request->faktur_pajak,  
         $request->disiapkan_oleh, 
         $request->batas_akhir_klaim, 
         $request->periode_program_start, 
         $request->periode_program_end
         ]);
        // dd($request->all());
        return redirect()->route('prokomF1-index');
    }
}
