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

                    <form action="{{ route('kelengkapan-dokumen-simpan') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Cost Center / GL Account</label>
                                        <select class="form-control" name="klaim_tagihan_ke" id="klaim_tagihan_ke">
                                            <option value=""></option>
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
                                        <input type='text' class="form-control " />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Target Penjualan (selama Periode Program) (B) </label>
                                        <input type='text' class="form-control " />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Estimasi Biaya Program yang dikeluarkan : (A) </label>
                                        <input type='text' class="form-control " disabled />
                                    </div>
                                </div>
                            </div>

                            {{-- start biaya --}}
                            <label><b>Rincian Budget Yang Dikeluarkan: </b> </label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">

                                        <input type='text' class="form-control " />
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <a class="btn btn-icon btn-info" href="#"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            {{-- end biaya --}}

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>% Biaya vs Penjualan (Selama Periode Program)</label>
                                        <input type='text' class="form-control " disabled />
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

@endpush
