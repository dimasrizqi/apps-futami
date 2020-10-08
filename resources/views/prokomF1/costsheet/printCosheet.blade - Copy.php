<!DOCTYPE html>
<html>
<head>
	<title>anjay ngoding</title>
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
	table {
	  border-collapse: collapse;
	}

	table, th, td {
	  border: 1px solid black;
	}
	.abu {background-color: #CFCFCF;}
</style>
<body>
	<table >
		@foreach ($cost_sheet as $no => $datanyaa)
            <tbody>
                <tr >
                    <td colspan="2" rowspan="4" align="center"><img src="savoria.jpg"width="100PX">
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
			<td rowspan="7" style="width: 90">Cost Center /GL Account</td>
			<td colspan="6" align="center">Kategori:(beri tanda v)</td>
		</tr>
		<tr>
			<td colspan="2">451 Product Listing</td>
			<td colspan="2">452 Selling Operation</td>
			<td colspan="2">453 Trade Promo</td>
		</tr>
		<tr>
			<td width="20px"></td>
			<td style="width:30%">4510	Listing General Trade</td>
			<td width="20px"></td>
			<td>4520 	Motoris / Kanvaser</td>
			<td></td>
			<td>4530 	Display / Visibility</td>
		</tr>
		<tr>
			<td width="20px"></td>
			<td>4511 	Listing Modern Trade (LMT)</td>
			<td width="20px"></td>
			<td>4521 	MD / Promotor</td>
			<td width="20px"></td>
			<td>4531 	Product Flushing</td>
		</tr>
		<tr>
			<td></td>
			<td>4512	Listing B2B & Sp Channel</td>
			<td></td>
			<td>4522 	SPG & Push Selling</td>
			<td></td>
			<td>4532 	Konsumen Promo</td>
		</tr>
		<tr>
			<td></td>
			<td>4513	Listing Modern Institusi</td>
			<td></td>
			<td>4523 	Salesman Exclusive</td>
			<td></td>
			<td>4533	Retail / Shop Promo</td>
		</tr>
		<tr>
			<td></td>
			<td>4514	Listing Modern Trade (NA)</td>
			<td></td>
			<td></td>
			<td></td>
			<td>4534	Isentif Salesman</td>
		</tr>
	</table>
	<table border="1" style="width: 100%" >
		@foreach ($cost_sheet as $no => $datanya)
		<tr>
			<td  align="center" height="60" style="font-size: 25px; "><b>Estimasi Perhitungan Biaya Program</b>
				<table border="1" style="font-size: 15px; width:  90%; " align="center"  >
					<br>
					<br>
					<tr>
						<td height="25px">Rata - Rata Penjualan (Toko atau kegiatan)</td>
						<td height="25px">Rp. {{$datanyaa->avg_penjualan}}</td>
					</tr>
					<tr>
						<td height="25px">Target Penjualan (Selama Periode Program)(B)</td>
						<td height="25px">Rp. {{$datanyaa->$target}}</td>
					</tr>
					<tr>
						<td height="25px"></td>
						<td height="15px"></td>
					</tr>
					<tr>
						<td class="abu" height="25px">Estimasi Biaya Program yang di keluarkan:(A)</td>
						<td height="25px">Rp. {{$datanyaa->$biaya}}</td>
					</tr>
					<tr>
						<td class="abu" height="25px"></td>
						<td height="15px"></td>
					</tr>
					<tr>
						<td height="25px">Rincian perhitungan budget yang dikeluarkan:</td>
						<td height="25px">Rp. {{$datanyaa->$biaya}}</td>
					</tr>
					<tr>
						<td height="25px"></td>
						<td height="25px"></td>
					</tr>
					<tr>
						<td class="abu" height="25px">% Biaya vs Penjualan(Selama Periode Peogram)</td>
						<td class="abu" height="25px">Rp.</td>
					</tr>
				</table>
			</td>
		</tr>
		


	</table>

</body>
</html>