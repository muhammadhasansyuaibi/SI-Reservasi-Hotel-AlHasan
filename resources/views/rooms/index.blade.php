@extends('master')

@section('content')
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
        <h2 class="pageheader-title">Data Kamar Hotel</h2>
    </div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>            
        @endif
    <div class="card">
        <div class="card-header">
            <a href="{{ url('/rooms/create') }}" class="btn btn-success"><i class="fas fa-plus mr-2"></i> Tambah Data</a>
            <a href="{{ url('/rooms/printpdf') }}" target="_blank" class="btn btn-dark float-right"><i class="fas fa-file-pdf mr-2"></i>Cetak PDF</a>
        </div>
        <div class="card-header">
            <div class="table-responsive">
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kamar</th>
                            <th>Gambar Kamar</th>
                            <th>Tipe Kamar</th>
                            <th>Tarif</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $room as $room)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $room->name }}</td>
                            <td>
                                <div class="m-r-10"><img class="rounded" width="67%" src="/images/{{ $room->image }}" alt="Image Kamar"></div>
                            </td>
                            <td>{{ $room->type }}</td>
                            <td>{{'Rp.'.number_format ($room->rates, 0, ',', '.') }}</td>
                            <td>
                                <a href="/rooms/{{ $room->id }}/edit" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a>

                                <form action="/rooms/{{ $room->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div> 
@include('sweetalert::alert')     
@endsection