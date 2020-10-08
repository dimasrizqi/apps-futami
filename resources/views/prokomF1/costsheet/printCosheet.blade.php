<!DOCTYPE html>
<html>
<head>
    <title>Print Costsheet</title>
</head>
<style type="text/css">
    @page {
            margin: 0.2cm 0.2cm 0.2cm 0.2cm;
        }

        

        td img {
            /* display: block; */
            margin-left: 0;
            margin-right: 0;
            margin-top: 0;
            margin-bottom: 0;

        }

        table {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            border-collapse: collapse;
            font-size: 12px;
            table-layout: auto;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #000000;
            padding: 5px;

        }

        tr {
            font-size: 12px;
        }

    html{
        font-family: calibri;
    }
  
    .abu {background-color: #CFCFCF;}

    .fs-12 {
        font-size: 10px;
    }
</style>
<body>
    <table >
            <tbody>
                <tr >
                    <td colspan="2" rowspan="4" align="center"><img src="{{ public_path('assets/img/savoria.jpg') }}" width="81">
                        <!-- <img src="{{asset('/assets/img/savoria.jpg')}}"> -->
                    </td>
                    <td colspan="4" style=" text-align: center; "><b> PT SAVORIA KREASI RASA</b></td>
                    <td>Doc No.</td>
                    <td>SKR/COM/FM/04/002</td>
                </tr>
                <tr>
                    <td colspan="4" style=" text-align: center"><b>FORMULIR</b></td>
                    <td>Issued Date</td>
                    <td>01 Juni 2020</td>
                </tr>
                <tr>
                    <td colspan="4" style=" text-align: center" rowspan="2"><b>PROPOSAL AKTIVITAS</b><br><b> LAMPIRAN 1. COST SHEET</b></td>
                    <td>Rev No.</td>
                    <td>00</td>
                </tr>
                <tr>
                    <td>Page</td>
                    <td>2 of 3</td>
                </tr>

    </table>

    <table border="1" style="width: 100%; font-size:12px">
        <tr>
            <td rowspan="7">Cost Center /GL Account</td>
            <td colspan="6" align="center">Kategori:(beri tanda v)</td>
        </tr>
        <tr class="fs-12">
            <td colspan="2">451 Product Listing</td>
            <td colspan="2">452 Selling Operation</td>
            <td colspan="2">453 Trade Promo</td>
        </tr>
        <tr class="fs-12">
            <td width="20px"></td>
            <td style="width:30%">4510  Listing General Trade</td>
            <td width="20px"></td>
            <td>4520    Motoris / Kanvaser</td>
            <td></td>
            <td>4530    Display / Visibility</td>
        </tr>
        <tr class="fs-12">
            <td width="20px"></td>
            <td>4511    Listing Modern Trade (LMT)</td>
            <td width="20px"></td>
            <td>4521    MD / Promotor</td>
            <td width="20px"></td>
            <td>4531    Product Flushing</td>
        </tr>
        <tr class="fs-12">
            <td></td>
            <td>4512    Listing B2B & Sp Channel</td>
            <td></td>
            <td>4522    SPG & Push Selling</td>
            <td></td>
            <td>4532    Konsumen Promo</td>
        </tr>
        <tr class="fs-12">
            <td></td>
            <td>4513    Listing Modern Institusi</td>
            <td></td>
            <td>4523    Salesman Exclusive</td>
            <td></td>
            <td>4533    Retail / Shop Promo</td>
        </tr>
        <tr class="fs-12">
            <td></td>
            <td>4514    Listing Modern Trade (NA)</td>
            <td></td>
            <td></td>
            <td></td>
            <td>4534    Isentif Salesman</td>
        </tr>
    </table>
    <table border="1" style="width: 100%" >
        <tr>
            <td  align="center" height="60" style="font-size: 25px; "><b>Estimasi Perhitungan Biaya Program</b>
                <table border="1" style="font-size: 15px; width:  90%; " align="center"  >
                    <br>
                    <br>
                    <?php 
                            $total_rincian = 0
                    ?>
                    @foreach($rincian as $rincian_data)
                       <?php $total_rincian += $rincian_data->biaya ?>
                    @endforeach
                    <tr>
                        <td height="25px" style="border-right: none !important; border-bottom-style: dotted; ">Rata - Rata Penjualan (Toko atau kegiatan)</td>
                        <td height="25px" style="border-right: none !important; border-left: none; border-bottom-style: dotted; ">Rp. </td>
                        <td style="border-left: none !important; text-align: right; border-bottom-style: dotted; "><?=$avg_penjualan->avg_penjualan?></td>
                    </tr>
                    <tr>
                        <td height="25px" style="border-right: none !important; border-top-style: dotted; border-bottom-style: dotted;">Target Penjualan (Selama Periode Program)(B)</td>
                        <td height="25px" style="border-right: none !important; border-left: none; border-top-style: dotted; border-bottom-style: dotted;">Rp. </td>
                        <td style="border-left: none !important; text-align: right; border-top-style: dotted; border-bottom-style: dotted;"><?=$target->target?></td>
                    </tr>
                    <tr>
                        <td height="25px" style="border-right: none !important; border-bottom-style: dotted; border-top-style: dotted;"></td>
                        <td height="25px" style="border-right: none !important; border-left: none; border-bottom-style: dotted; border-top-style: dotted;"></td>
                        <td style="border-left: none !important; text-align: right; border-bottom-style: dotted; border-top-style: dotted;"></td>

                    </tr>
                    <tr>
                        <td class="abu" height="25px" style="border-right: none !important; border-top-style: dotted; border-bottom-style: dotted;">Estimasi Biaya Program yang di keluarkan:(A)</td>
                        <td class="abu" height="25px" style="border-right: none !important; border-left: none; border-left: none; border-top-style: dotted; border-bottom-style: dotted;">Rp. </td>
                        <td class="abu" style="border-left: none !important; text-align: right; border-top-style: dotted; border-bottom-style: dotted;"><?=$total_rincian?></td>
                    </tr>
                    <tr>
                        <td class="abu" height="25px" style="border-right: none !important; border-bottom-style: dotted; border-top-style: dotted;"></td>
                        <td class="abu" height="25px" style="border-right: none !important; border-left: none; border-left: none; border-bottom-style: dotted; border-top-style: dotted;"></td>
                        <td class="abu" style="border-left: none !important; text-align: right; border-bottom-style: dotted; border-top-style: dotted;"></td>

                    </tr>
                    <tr>
                        <td height="25px" style="border-right: none !important; border-top-style: dotted; border-bottom-style: dotted;">Rincian perhitungan budget yang dikeluarkan:</td>
                        <td height="25px" style="border-right: none !important; border-left: none; border-top-style: dotted; border-bottom-style: dotted;"></td>
                        <td style="border-left: none !important; text-align: right; border-top-style: dotted; border-bottom-style: dotted;"></td>
                    </tr>
                    @foreach($rincian as $data_rincian)
                    <tr>
                        <td height="25px" style="border-right: none !important; border-bottom-style: dotted; border-top-style: dotted;"></td>
                        <td height="25px" style="border-right: none !important; border-left: none; border-bottom-style: dotted; border-top-style: dotted;">Rp. </td>
                        <td style="border-left: none !important; text-align: right; border-bottom-style: dotted; border-top-style: dotted;"><?=$data_rincian->biaya ?></td>
                    </tr>
                    @endforeach
                    <?php 
                        $rata_rata = ($total_rincian/$target->target);
                    ?>
                    <tr>
                        <td class="abu" height="25px" style="border-right: none !important; border-top-style: dotted;">% Biaya vs Penjualan(Selama Periode Peogram)</td>
                       <td class="abu" height="25px" style="border-right: none !important; border-left: none; border-top-style: dotted;"></td>
                        <td class="abu" style="border-left: none !important; text-align: right; border-top-style: dotted;"><?= $rata_rata?>.00 %</td>
                    </tr>
                </table>
            </td>
        </tr>
        


    </table>

</body>
</html>