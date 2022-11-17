@extends('master')

@section('content')
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
        <h2 class="pageheader-title">Data Transaksi Hotel</h2>
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
            <a href="{{ url('/transactions/create') }}" class="btn btn-success"><i class="fas fa-plus mr-2"></i>Tambah Data</a>
            <a href="{{ url('/transactions/printpdf') }}" target="_blank" class="btn btn-dark float-right"><i class="fas fa-file-pdf mr-2"></i>Cetak PDF</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered first">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengguna</th>
                            <th>Nama Konsumen</th>
                            <th>Kamar</th>
                            <th>Layanan</th>
                            <th>Cek In</th>
                            <th>Cek Out</th>
                            <th>Total Biaya</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $transaction as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->user['name'] }}</td>
                            <td>{{ $item->customer['name'] }}</td>
                            <td>{{ $item->room['name'] }}</td>
                            <td>{{ $item->service['name'] }}</td>
                            <td>{{ $item->cekin_date }}</td>
                            <td>{{ $item->cekout_date }}</td>
                            <td>{{'Rp.'.number_format ($item->total_cost, 0, ',', '.') }}</td>
                            <td>
                                <a href="/transactions/{{ $item->id }}/edit" class="btn btn-primary btn-xs"><i class="fas fa-edit"></i></a>

                                <form action="/transactions/{{ $item->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
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