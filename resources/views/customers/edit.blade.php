@extends('master')

@section('content')
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
        <h2 class="pageheader-title">Form Ubah Data Konsumen</h2>
    </div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="/customers/{{ $customer->id }}" id="basicform">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input name="name"  id="name" type="text" placeholder="Nama Lengkap" class="form-control @error('name') is-invalid @enderror" value="{{ $customer->name }}">
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="age">Usia</label>
                    <input name="age"  id="age" type="number" placeholder="Usia" class="form-control @error('age') is-invalid @enderror" value="{{ $customer->age }}">
                    @error('age')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="gender">Kelamin</label>
                    <div class="">
                        <div class="">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="gender" id="genderL" value="L" {{$customer->gender == 'L'? 'checked' : ''}} class="custom-control-input @error('gender') is-invalid @enderror">
                                <span class="custom-control-label">Laki-laki</span>
                                @error('gender')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="gender" id="genderP" value="P" {{$customer->gender == 'P'? 'checked' : ''}}  class="custom-control-input @error('gender') is-invalid @enderror">
                                <span class="custom-control-label">Perempuan</span>
                                @error('gender')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="proffesion">Pekerjaan</label>
                    <input name="proffesion" id="proffesion" type="text" placeholder="Pekerjaan" class="form-control" value="{{ $customer->proffesion }}">
                </div>
                <div class="form-group">
                    <label for="contact">Kontak</label>
                    <input name="contact" id="contact" type="number" placeholder="Kontak" class="form-control @error('contact') is-invalid @enderror" value="{{ $customer->contact }}">
                    @error('contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input name="address" id="address" type="text" placeholder="Alamat" class="form-control @error('address') is-invalid @enderror" value="{{ $customer->address }}"></input>
                    @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" id="email" type="email" placeholder="nama@contoh.com" class="form-control" value="{{ $customer->email }}">
                </div>
                <div class="col-sm-12 pl-0">
                    <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary">Ubah</button>
                        <a href="{{ url('/customers') }}" class="btn btn-space btn-secondary">Batal</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection