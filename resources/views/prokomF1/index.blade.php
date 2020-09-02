@extends('layouts.master')
@section('title', 'Sales & Commercial')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Home Sales & Commercial </h1>
        </div>
        <div class="section-body">
            <div class="title m-b-md">
                <a href="{{ route('prokomF1-tambah') }}" class="btn btn-info" target="_blank">Tambah Data</a>
                <table class="table table-striped table-bordered table-sm">
                    <tr>
                        <th width="50px">NO.</th>
                        <th>No Proposal</th>
                        <th>Nama Program</th>
                        <th>L1. Cost Sheet</th>
                        <th>Kelengkapan Dokumen</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data_prokomf1 as $no => $datanya)
                        <tr>
                            <td> {{ $no + 1 }} </td>
                            <td><a href="#">{{ $datanya->nomor_proposal }}</a></td>
                            <td>{{ $datanya->nama_program }}</td>
                            <td></td>
                            <td></td>
                            <td>
                                @if ($message = Session::get('grupnya') == '1')
                                    <a href="{{ route('prokomF1-hapus', $datanya->id) }}"
                                        class="badge badge-danger">Hapus</a>
                                @endif
                                <a href="{{ route('prokomF1-print', $datanya->id) }}" class="badge badge-info"
                                    target="_blank">Print</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection

@push('page-script')

@endpush
