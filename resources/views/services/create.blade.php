@extends('master')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Form Tambah Data Layanan</h2>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/services" id="basicform" >
                @csrf
                    <div class="form-group">
                        <label for="name">Layanan</label>
                        <input name="name"  id="name" type="text" placeholder="Nama Layanan" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input name="price" id="price" type="number" placeholder="Rp." class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
                        @error('price')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-12 pl-0">
                        <p class="text-right">
                            <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                            <a href="{{ url('/services') }}" class="btn btn-space btn-secondary">Batal</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection