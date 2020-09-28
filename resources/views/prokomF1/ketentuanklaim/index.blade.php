@extends('layouts.master')
@section('title', 'Ketentuan Klaim')

@section('content')
    <section class="section">
        <div class="section-header">
        
        <h1><a href="{{ route('ketentuanklaim.create') }}" class="btn btn-info">Tambah Data</a>   Ketentuan Klaim </h1> 
        </div>
    </section>
    <div class="section-body">
        
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @if ($message = Session::get('deleted'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($parameter_uji  as $no => $item)
                        {{$no+1  }} . {{$item->name}}<br>
                        <form action="{{ route('ketentuanklaim.destroy',$item->id) }}" method="POST">
                            {{-- <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> --}}
                            <a class="btn btn-primary" href="{{ route('ketentuanklaim.edit',$item->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form><br> 
                    @endforeach
            </div>

        </div>
    </div>
    </div>
@endsection

@push('page-script')

@endpush
