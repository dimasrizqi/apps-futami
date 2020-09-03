@extends('layouts.master')
@section('title', 'Tambah Cost Sheet')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Input Cost Sheet Untuk Prokom Sales & Commercial</h1>
        </div>
    </section>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                    <form id="myTable" action="{{ route('prokomF1-simpan-chost-sheet') }}" method="POST">
                        @csrf
                        <input type="hidden" name="creator" value="
                        @if ($message = Session::get('id_user'))
                        {{ $message }}
                        @endif">
                        <input type="number" name="no_proposal" >
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Cost Center / GL Account</label>
                                        <select class="form-control" name="item_cost" id="item_cost">
                                            {{-- null --}}
                                            <option value=""></option> 
                                            {{-- show cost center list --}}
                                            @foreach ($item_cost as $item)
                                                <option value="{{ $item->id }}">{{ $item->id_cost_center }} -
                                                    {{ $item->id_item }} - {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Rata-rata penjualan (toko atau kegiatan): </label>
                                        <input type='number' class="form-control" name="avg_penjualan" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Target Penjualan (selama Periode Program) (B) </label>
                                        <input type='number' class="form-control " name="target"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label >Estimasi Biaya Program yang dikeluarkan : (A) </label>
                                        <label id="total_sum_value" type='number' class="form-control" >0</label>
                                    </div>
                                </div>
                            </div>

                            {{-- start biaya --}}
                            <label><b>Rincian Budget Yang Dikeluarkan: </b> </label>
                            <div class="row"  id="biayanya">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type='number' name="biaya[]" class="form-control txtCal" />
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="button" name="add" id="add" value="+" class="btn btn-success">
                                    </div>
                                </div>
                            </div>
                            {{-- end biaya --}}

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group" >
                                        <label>% Biaya vs Penjualan (Selama Periode Program) </label>
                                        <input type='number' class="form-control " disabled />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-left">
                                        <button class="btn btn-primary mr-1" type="submit">Simpan</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('page-scripts')
<script>
    $(document).ready(function(){
    
        
    $("#myTable").on('input', '.txtCal', function () {
           var calculated_total_sum = 0;
         
           $("#myTable .txtCal").each(function () {
               var get_textbox_value = $(this).val();
               if ($.isNumeric(get_textbox_value)) {
                  calculated_total_sum += parseFloat(get_textbox_value);
                  }                  
                });
                  $("#total_sum_value").html("Rp."+calculated_total_sum);
           });
    
    });
    
    </script>
<script type="text/javascript">
        $(document).ready(function() {
            var html =
                '<div name="tambahan" id="tambahan" class="col-md-3"><div class="form-group"><input type="number" name="biaya[]" class="form-control txtCal"/></div></div><div class="col-md-9"><div class="form-group"><input type="button" name="remove" id="remove" value="-" class="btn btn-danger"></div></div>';
            var max = 20;
            var x = 2;

            $("#add").click(function() {
                if (x <= max) {
                    $("#biayanya").append(html);
                    x++;
                }else{
                    alert("dah maximal gan");
                }
            });

            $("#biayanya").on('click', '#remove', function() {
                // $(this).closest('div').remove();
                $('#tambahan').remove();
                x--;
            });

        });

    </script>
@endpush
