@extends('layouts.master')
@section('title', 'Metode Klaim')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>List Metode Klaim </h1>
        </div>

        <div class="section-body">
            <div class="title m-b-md">
                <a href="{{ route('prokomF1-tambah-metode-klaim') }}" class="btn btn-info">Tambah Data</a>
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>NO.</th>
                        <th>Jenis Program</th>
                        <th>Mekanisme Klaim</th>
                        <th>Action</th>
                    </tr>
                    {{-- @foreach ($data_prokomf1 as $no => $datanya) --}}
                        <tr>
                            <th rowspan="2"> 1 </th>
                            <th rowspan="2">satu program</th>
                            <td>langsung claim</td>
                            <td>
                                <a href="#" class="btn btn-success">Detail Data</a>
                                <a href="#" class="btn btn-warning">Hapus Data</a>
                            </td>
                        </tr>

                        <tr>
                            <td>jangna lupa kwitansi</td>
                            <td>
                                <a href="#" class="btn btn-success">Detail Data</a>
                                <a href="#" class="btn btn-warning">Hapus Data</a>
                            </td>
                        </tr>

                        <tr>
                          <th class="rowspan" rowspan="2"> 2 </th>
                          <th rowspan="2">satu program</th>
                          <td>langsung claim</td>
                          <td>
                              <a href="#" class="btn btn-success">Detail Data</a>
                              <a href="#" class="btn btn-warning">Hapus Data</a>
                          </td>
                      </tr>
                      
                      <tr>
                          <td>jangna lupa kwitansi</td>
                          <td>
                              <a href="#" class="btn btn-success">Detail Data</a>
                              <a href="#" class="btn btn-warning">Hapus Data</a>
                          </td>
                      </tr>
                        {{--
                    @endforeach --}}
                </table>
            </div>
        </div>
    </section>
@endsection

@push('page-script')

@endpush
