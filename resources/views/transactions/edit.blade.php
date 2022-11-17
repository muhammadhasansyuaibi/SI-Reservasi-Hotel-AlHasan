@extends('master')

@section('content')
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="page-header">
        <h2 class="pageheader-title">Form Edit Data Transaksi</h2>
    </div>
</div>
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="/transactions/{{ $transaction->id }}" id="basicform" >
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="user_id">Nama Pengguna</label>
                    <select name="user_id" class="custom-select @error('user_id') is-invalid @enderror" id="user_id">
                        <option value="">- Pilih -</option>
                        @foreach ($user as $item)
                            <option value="{{ $item->id }}" {{ old('user_id', $transaction->user_id) == $item->id ? 'selected' : null }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="customer_id">Nama Konsumen</label>
                    <select name="customer_id" class="custom-select @error('customer_id') is-invalid @enderror" id="customer_id">
                        <option value="">- Pilih -</option>
                        @foreach ($customer as $item)
                            <option value="{{ $item->id }}" {{ old('customer_id', $transaction->customer_id) == $item->id ? 'selected' : null }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('customer_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="room_id">Kamar</label>
                    <select name="room_id" class="custom-select @error('room_id') is-invalid @enderror" id="room_id">
                        <option value="">- Pilih -</option>
                        @foreach ($room as $item)
                            <option value="{{ $item->id }}" {{ old('room_id', $transaction->room_id) == $item->id ? 'selected' : null }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('room_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="service_id">Layanan</label>
                    <select name="service_id" class="custom-select @error('service_id') is-invalid @enderror" id="service_id">
                        <option value="">- Pilih -</option>
                        @foreach ($service as $item)
                            <option value="{{ $item->id }}" {{ old('service_id', $transaction->service_id) == $item->id ? 'selected' : null }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                    @error('service_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cekin_date">Cek In </label>
                    <input name="cekin_date"  id="cekin_date" type="date" class="form-control date-inputmask @error('cekin_date') is-invalid @enderror" id="date-mask" placeholder="dd/mm/yyyy" value="{{ old('cekin_date', $transaction->cekin_date) }}">
                    @error('cekin_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cekout_date">Cek Out </label>
                    <input name="cekout_date" id="cekout_date" type="date" class="form-control date-inputmask @error('cekout_date') is-invalid @enderror" id="date-mask" placeholder="dd/mm/yyyy" value="{{ old('cekout_date', $transaction->cekout_date) }}">
                    @error('cekout_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="total_cost">Total Biaya</label>
                    <input name="total_cost" id="total_cost" data-parsley-type="number" type="number" placeholder="Rp." class="form-control @error('total_cost') is-invalid @enderror" value="{{ old('total_cost', $transaction->total_cost) }}">
                    @error('total_cost')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-sm-12 pl-0">
                    <p class="text-right">
                        <button type="submit" class="btn btn-space btn-primary">Ubah</button>
                        <a href="{{ url('/transactions') }}" class="btn btn-space btn-secondary">Batal</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection