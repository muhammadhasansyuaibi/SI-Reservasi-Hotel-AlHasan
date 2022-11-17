@extends('master')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Form Ubah Data Kamar</h2>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/rooms/{{ $room->id }}" id="basicform">
                @method('patch')
                @csrf
                    <div class="form-group">
                        <label for="name">Kamar</label>
                        <input name="name"  id="name" type="text" placeholder="Nama Kamar" class="form-control @error('name') is-invalid @enderror" value="{{ $room->name }}">
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="custom-file mb-3">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        <input type="hidden" name="image_old" class="custom-file-input" id="customFile" value="{{ $room->image }}">
                        <label class="custom-file-label" for="customFile">{{ $room->image }}</label>
                    </div>
                    <div class="form-group">
                        <label for="type">Tipe Kamar</label>
                        <input name="type"  id="type" type="text" placeholder="Tipe Kamar" class="form-control @error('type') is-invalid @enderror" value="{{ $room->type }}">
                        @error('type')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="rates">Tarif</label>
                        <input name="rates" id="rates" type="text" placeholder="Rp." class="form-control @error('rates') is-invalid @enderror" value="{{ $room->rates }}">
                        @error('rates')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="col-sm-12 pl-0">
                        <p class="text-right">
                            <button type="submit" class="btn btn-space btn-primary">Ubah</button>
                            <a href="{{ url('/rooms') }}" class="btn btn-space btn-secondary">Batal</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection