@extends('master')

@section('content')
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">ID Pengguna</h5>
        <div class="card-body">
            <form id="validationform" data-parsley-validate="" novalidate="">
                <div class="form-group row">
                    <label for="inputUserName" class="col-12 col-sm-3 col-form-label text-sm-right">User Name</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-12 col-sm-3 col-form-label text-sm-right">Password</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputRepeatPassword" class="col-12 col-sm-3 col-form-label text-sm-right">Repeat Password</label>
                    <div class="col-12 col-sm-8 col-lg-6">
                        <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="password" required="" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label text-sm-right">Jabatan</label>
                    <div class="col-sm-6">
                        <form>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="radio-inline" checked="" class="custom-control-input"><span class="custom-control-label">Administrator</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Reservation Supervisor</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Accounting Department</span>
                            </label>
                        </form>
                    </div>
                </div>
                <div class="form-group row text-right">
                    <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                        <button type="submit" class="btn btn-space btn-primary">Simpan</button>
                        <button class="btn btn-space btn-secondary">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection