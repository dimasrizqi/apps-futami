@extends('layouts.master')
@section('title', 'Metode Klaim')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Input Metode Klaim Prokom Form 1</h1>
        </div>
    </section>
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">

                    <form action="{{ route('prokomF1-simpan-metode-klaim') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name Jenis Program</label>
                                        <input type="text" placeholder="Input Nama Jenis Program" name="kepada_yth" class="form-control">
                                    </div>
                                </div>
                                

                                <div class="col-md-12">
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
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
