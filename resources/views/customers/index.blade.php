@extends('master')

@section('content')
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
        <h2 class="pageheader-title">Data Konsumen</h2>
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
            <a href="{{ url('/customers/create') }}" class="btn btn-success"><i class="fas fa-plus mr-2"></i> Tambah Data</a>
            <a href="{{ url('/customers/printpdf') }}" target="_blank" class="btn btn-dark float-right"><i class="fas fa-file-pdf mr-2"></i>Cetak PDF</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Usia</th>
                            <th>Pekerjaan</th>
                            <th>Alamat</th>
                            <th>Kontak</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $customer as $customer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->gender }}</td>
                            <td>{{ $customer->age }}</td>
                            <td>{{ $customer->proffesion }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->contact }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>
                                <a href="/customers/{{ $customer->id }}/edit" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a>

                                <form action="/customers/{{ $customer->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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