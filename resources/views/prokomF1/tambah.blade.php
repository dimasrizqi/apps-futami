@extends('layouts.master')
@section('title', 'Tambah data')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Input Data Prokom Form 1</h1>
        </div>
    </section>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                    <form action="{{ route('prokomF1-simpan') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Kepada Yth:</label>
                                        <input type="text" name="kepada_yth" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Diketahui CC:</label>
                                        <input type="text" name="di_ketahui" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Program</label>
                                        <input type="text" name="nama_program" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Brand / Item</label>
                                        <input type="text" name="brand_item" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Kode RKB</label>
                                        <input type="text" name="kode_rkb" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Periode Program</label>
                                        <input type="text" name="periode_program" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Area Program</label>
                                        <input type="text" name="area_program" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Channel Program</label> <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" checked="">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Radio 1
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" checked="">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Radio 2
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" checked="">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Radio 3
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios2" checked="">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Radio 4
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios2" checked="">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Radio 5
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>1. Background / Informasi</label>
                                        <textarea class="form-control" name="background_informasi"
                                            style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>2. Mekanisme Program</label>
                                        <textarea class="form-control" name="mekanisme_program"
                                            style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                        <button class="btn btn-secondary" type="reset">Reset</button>
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

@push('page-script')

@endpush
