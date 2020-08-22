@extends('layouts.master')
@section('title', 'Sales & Commercial')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Home Sales & Commercial </h1>
        </div>

        <div class="section-body">
            <div class="title m-b-md">
                <a href="{{ route('prokomF1-tambah') }}" class="btn btn-info">Tambah Data</a>
                <table class="table table-striped table-bordered table-sm">
                    <tr>
                        <th width="50px">NO.</th>
                        <th>No Proposal</th>
                        <th>Nama Program</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data_prokomf1 as $no => $datanya)
                        <tr>
                            <td> {{ $no + 1 }} </td>
                            <td>{{ $datanya->nomor_proposal }}</td>
                            <td>{{ $datanya->nama_program }}</td>
                            <td><a href="{{route ('prokomF1-detail',$datanya->id)}}" class="badge badge-success">edit</a>

                                @if ($message = Session::get('grupnya') == '1')
                                    <a href="{{route ('prokomF1-hapus',$datanya->id)}}" class="badge badge-danger">Hapus</a>
                                @endif

                                <a href="{{route ('prokomF1-print',$datanya->id)}}" class="badge badge-info">Print</a>
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
