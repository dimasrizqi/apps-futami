<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class prokomController extends Controller

{
    public function index(){
        $data_prokomf1 = DB::table('prokomf1')->where('status','1')->orderBy('id','asc')->get();
        return view('prokomF1.index',['data_prokomf1' => $data_prokomf1]);
        
    }

    public function detail(Request $request){
        $data_prokomf1 = DB::table('prokomf1')->where('id',$request->id)->get();
        return view('prokomF1.detail',['data_prokomf1' => $data_prokomf1]);
        //dd($request->id);
    }

    public function print(Request $request){
        $data_prokomf1 = DB::table('prokomf1')
            ->where('id',$request->id)
            ->get();
        $no_proposal=$data_prokomf1[0]->nomor_proposal;
        // return view('prokomF1.formProkom.printProkom',['data_prokomf1' => $data_prokomf1]);
        // dd($no_proposal);

        //Download as pdf
        // return PDF::->loadView('reports.invoiceSell')->stream();
        $pdf = \PDF::setOptions(['isRemoteEnabled' => true])
            ->loadView('prokomF1.formProkom.printProkom', ['data_prokomf1' => $data_prokomf1])
            ->setPaper('a4', 'potrait');
        //stream pdf file name as nomor proposal
        return $pdf->stream($no_proposal.".pdf");
        // return $pdf->download('prokomF1.pdf');
    }
    public function prints(Request $request){
        $data_prokomf1 = DB::table('prokomf1')
            ->where('id',$request->id)
            ->get();
        $no_proposal=$data_prokomf1[0]->nomor_proposal;
        // return view('prokomF1.formProkom.printProkom',['data_prokomf1' => $data_prokomf1]);
        // dd($no_proposal);

        //Download as pdf
        // return PDF::->loadView('reports.invoiceSell')->stream();
        $pdf = \PDF::setOptions(['isRemoteEnabled' => true])
            ->loadView('prokomF1.formProkom.setup-print-prokom', ['data_prokomf1' => $data_prokomf1])
            ->setPaper('a4', 'potrait');
        //stream pdf file name as nomor proposal
        return $pdf->stream($no_proposal.".pdf");
        // return $pdf->download('prokomF1.pdf');
    }
    
    public function tambah(){
        $data_jenis_program = DB::table('jenis_program')->where('status','1')->orderBy('jenis_program','asc')->get();
        $data_channel_program = DB::table('channel_program')->where('status','1')->orderBy('channel_program','asc')->get();
        return view('prokomF1.tambah',[
            'data_jenis_program'=>$data_jenis_program,
            'data_channel_program'=>$data_channel_program
        ]);
    }

    public function update(Request $request){
        dd($request->all());
    }
    public function hapus(Request $request){
        dd($request->all());
    }

    public function simpan(Request $request){
        $revisi_ke = '0';
        $status = '1';
        // return $request;
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
            periode_program_end,
            jenis_program,
            status, 
            ketentuan_tambahan_operasional
        )

         values (
             ?,?,?,?,?,
             ?,?,?,?,?,
             ?,?,?,?,?,
             ?,?,?,?,?,
             ?,?,?,?,?,
             ?,?)',

         [$request->kepada_yth, 
         $request->nomor_proposal, 
         $request->kode_rkb, 
         $request->nama_program, 
         $request->di_ketahui, 
         $request->brand_item, 
         $request->area_program, 
         $request->region_program, 
         $revisi_ke, 
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
         $request->periode_program_end,
         $request->jenis_program,
         $status,
         $request->ketentuan_tambahan_operasional
         ]);
        // dd($request->all());
        return redirect()->route('prokomF1-index');
    }
}
