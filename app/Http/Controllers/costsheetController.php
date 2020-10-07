<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Costsheet;

class costsheetController extends Controller
{
    public function index(){
        
        $data_prokomf1 = DB::table('prokomf1')->where('status','1')->where('disiapkan_oleh', Session::get('id_user'))->orderBy('id','asc')->get();
        $cost_sheet = DB::table('cost_sheet')->get('id');
        $kelengkapan_dokumen = DB::table('kelengkapan_dokumen')->get();

        return view('prokomF1.index',['data_prokomf1' => $data_prokomf1,
            'kelengkapan_dokumen'=>$kelengkapan_dokumen,
            'cost_sheet'=>$cost_sheet]);
        
    }

    public function tambah(){
        $item_cost = DB::table('item_cost')->orderBy('id_cost_center','asc')->get();
        return view('prokomF1.costsheet.tambah',["item_cost"=>$item_cost]);
    }

    public function simpan(Request $request){
        $biaya = $request->biaya;
        $name = $request->name;
        for($count = 0; $count < count($biaya); $count++){
            $data = array(
                'biaya' => $biaya[$count],
                'creator' => $request->creator,
                'name' => $name[$count],
                'no_proposal'=> $request->no_proposal
            );
            $insert_data[] = $data; 
        }
        $cost_sheet_data[] = array(
            'item_cost' => $request->item_cost,
            'avg_penjualan' => $request->avg_penjualan,
            'target' => $request->target,
            'no_proposal' => $request->no_proposal,
            'creator' => $request->creator,
        );

        DB::table('rincian_budget')->insert($insert_data);
        DB::table('cost_sheet')->insert( $cost_sheet_data);
            
        $id_cost_sheet = DB::table('cost_sheet')->where('no_proposal',$request->no_proposal)->first()->id;
        DB::table('prokomf1')
            ->where('nomor_proposal', $request->no_proposal)
            ->update([
                    'l1_cost_sheet' => $id_cost_sheet
                ]);
        //  return redirect()->back();
         return redirect()->route('prokomF1-index');
    }

      public function print(Request $request,$id){
        $avg_penjualan = DB::table('cost_sheet')->where('no_proposal', $request->no_proposal)->first();
        $target = DB::table('cost_sheet')->where('no_proposal', $request->no_proposal)->first();
        $biaya = DB::table('rincian_budget')->where('no_proposal', $request->no_proposal)->first();

        //Download as pdf
        $pdf = \PDF::setOptions(['isRemoteEnabled' => true])
            ->loadView('prokomF1.costsheet.printCosheet', [
               'avg_penjualan' => $avg_penjualan,
               'target' => $target,
               'biaya' => $biaya,
            ])
            ->setPaper('a4', 'potrait');
        // return view('prokomF1.formProkom.printProkom', [
        //     'data_prokomf1' => $data_prokomf1,
        //     'data_jenis_program'=>$data_jenis_program,
        //     'data_channel_program'=>$data_channel_program,
        //     'creator'=>$creator,
        //     'klaim'=>$klaim,
        // ]);
        //stream pdf file name as nomor proposal
        return $pdf->stream($request->no_proposal.".pdf");
        // return $pdf->download('prokomF1.pdf');
    }
           
}