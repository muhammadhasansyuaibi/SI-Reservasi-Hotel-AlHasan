@extends('master')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Form Ubah Data Pengguna</h2>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/users/{{ $user->id }}" id="basicform" >
                @method('patch')
                @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input name="name"  id="name" type="text" placeholder="Nama Pengguna" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}">
                        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email"  id="email" type="email" placeholder="nama@contoh.com" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}">
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">Jabatan :</label>
                            <div class="form-check">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="position" id="administrator" value="Administrator" {{$user->position == 'Administrator'? 'checked' : ''}} class="custom-control-input @error('position') is-invalid @enderror">
                                    <span class="custom-control-label">Administrator</span> 
                                    @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="position" id="reservationsupervisor" value="Reservation Supervisor" {{$user->position == 'Reservation Supervisor'? 'checked' : ''}} class="custom-control-input @error('position') is-invalid @enderror">
                                    <span class="custom-control-label">Reservation Supervisor</span>
                                    @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="position" id="accountingdepartment" value="Accounting Department" {{$user->position == 'Accounting Department'? 'checked' : ''}} class="custom-control-input @error('position') is-invalid @enderror">
                                    <span class="custom-control-label">Accounting Department</span>
                                    @error('position')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </label>
                            </div>
                    </div>
                    <div class="col-sm-12 pl-0">
                        <p class="text-right">
                            <button type="submit" class="btn btn-space btn-primary">Ubah</button>
                            <a href="{{ url('/users') }}" class="btn btn-space btn-secondary">Batal</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection